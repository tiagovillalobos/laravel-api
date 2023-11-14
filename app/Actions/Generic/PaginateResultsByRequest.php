<?php 

namespace App\Actions\Generic;


class PaginateResultsByRequest
{
    public function execute($request, $model)
    {
        $requestAll = $request->all();
        $results = $model::query();

        foreach ($requestAll as $key => $value) {
            
            if(!str_contains($key, "-")) {
                $name = explode("_", $key);

                if(isset($name[1]) && $name[1] == "like") {
                    $results = $results->where($name[0], 'like', '%'.$value.'%');
                } else {
                    $results = $results->where($name[0], $value);
                }
            }    
            
            $relationParams = explode("-", $key);
            
            if(count($relationParams) != 2) {
                continue;
            }

            $relationName = $relationParams[0];
            $relationColumn = $relationParams[1];

            $results = $results->whereHas($relationName, function($query) use ($relationColumn, $value) {

                $values = explode(",", $value);

                if(count($values) > 1) {
                    $query->whereIn($relationColumn, $values);
                } else {
                    $query->where($relationColumn, $value);
                }
            });

        }

        return $results->paginate();
    }
}