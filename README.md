# Restful API for e-Commerce

###### The Restful API developed in PHP Framework Laravel 8.0 and it just providing all products from database and return as JSON format for client.
###### Two APIs, list of procducts and reading one product by id.

## Get all products
```
Route::apiResource("products/",ProductsController::class);
```

## Response
```
[
    {
        "id": 1,
        "name": "aut",
        "price": 807,
        "stock": 12,
        "discount": 5,
        "description": "Mollitia voluptate illum voluptas unde dicta unde eveniet. Voluptates delectus sit quis ut ut velit totam. Omnis non consequatur voluptas sit nulla.",
        "created_at": "1973-04-04T23:53:19.000000Z",
        "updated_at": "2022-06-11T01:21:16.000000Z"
    },
    {
        "id": 2,
        "name": "ut",
        "price": 796,
        "stock": 95,
        "discount": 6,
        "description": "Beatae explicabo odit eos natus eum ut esse. Est consequatur et rem possimus. Sapiente porro necessitatibus voluptates aut qui. Eligendi in eum voluptas adipisci ullam ullam.",
        "created_at": "1984-09-14T22:48:07.000000Z",
        "updated_at": "2022-06-11T01:21:16.000000Z"
    },
    {
        "id": 3,
        "name": "cumque",
        "price": 181,
        "stock": 73,
        "discount": 10,
        "description": "Illo autem ea consequuntur sint omnis. Modi ipsa velit rerum itaque non ab aut. Nemo fuga atque reiciendis pariatur. Sequi et neque aut. Est labore alias molestias.",
        "created_at": "1983-12-28T03:52:34.000000Z",
        "updated_at": "2022-06-11T01:21:16.000000Z"
    },
    {
        "id": 4,
        "name": "ut",
        "price": 485,
        "stock": 76,
        "discount": 8,
        "description": "Repellendus pariatur nemo debitis voluptas omnis. Voluptatem sint qui earum aliquam natus ipsum nobis. Ratione maiores cum recusandae qui et. Ut cumque fuga dolorem beatae officiis.",
        "created_at": "1981-11-16T10:36:06.000000Z",
        "updated_at": "2022-06-11T01:21:16.000000Z"
    },
    .
    .
    .
    }
]
```

## Resource collection is used for transforming the data to JSON format as below

```
namespace App\Http\Resources\Products;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        
    }
}
```

## Details of one product
```
Route::apiResource("products/10",ProductsController::class); //return the details of product number 10
```
## The response as below
```
{
    "data": {
        "name": "aut",
        "price": 390,
        "stock": 12,
        "discount": 7,
        "description": "Aspernatur odio corporis maiores hic delectus. Illo inventore accusantium dolorem ut placeat quam."
    }
}
```
# PHPUnit used for testing 
