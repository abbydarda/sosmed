<?php
  namespace App\Transformers;

  use App\User;

  class UsersTransformer {

    public function TrasformCollection($datas)
    {
        return $datas->map(function ($data){
           return [
            "id"=>$data->id,
            "name"=>$data->name,
            "email"=>$data->email,
            "address"=>[
              "street"=>$data->address["street"],
              "suite"=>$data->address["suite"],
              "city"=>$data->address["city"],
              "zipcode"=>$data->address["zipcode"],
              "geo"=>[
                "lat"=>$data->address["geo"]["lat"],
                "lang"=>$data->address["geo"]["lang"]
              ]
            ],
            "phone"=>$data->phone,
            "website"=>$data->website,
            "company"=> [
              "name"=>$data->company["name"],
              "catchPhrase"=>$data->company["catchPhrase"],
              "bs"=>$data->company["bs"]
            ]
          ];
      });
    }
      public function TransformItem($data)
      {
        return [
         "id"=>$data->id,
         "name"=>$data->name,
         "email"=>$data->email,
         "address"=>[
           "street"=>$data->address["street"],
           "suite"=>$data->address["suite"],
           "city"=>$data->address["city"],
           "zipcode"=>$data->address["zipcode"],
           "geo"=>[
             "lat"=>$data->address["geo"]["lat"],
             "lang"=>$data->address["geo"]["lang"]
           ]
         ],
         "phone"=>$data->phone,
         "website"=>$data->website,
         "company"=> [
           "name"=>$data->company["name"],
           "catchPhrase"=>$data->company["catchPhrase"],
           "bs"=>$data->company["bs"]
         ]
       ];
      }
  }
