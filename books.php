<?php

$books = [
  array("id"=>299154,
        "cover"=>"https://satakirjastot.finna.fi/Cover/Show?author=Emmett%2C+Jonathan&callnumber=&size=medium&title=Henkka+Huimap%C3%A4%C3%A4+pelastaa+maailman&recordid=satakirjastot.299154&source=Solr&isbn=9518837473&index=0&w=1200&h=1200",
       "category"=> 1,
       "tag"=> "Aika ja avaruus"),
  array("id"=>1358489,
        "cover"=>"https://satakirjastot.finna.fi/Cover/Show?id=satakirjastot.1358489&index=0&size=medium&w=1200&h=1200",
        "category"=>1,
        "tag"=>"Aika ja avaruus")
];

echo json_encode($books);
?>
