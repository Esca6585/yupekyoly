<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sale_name = ['0', '15', '0', '25'];

        $name_tm = ['Iri ýaprakly gök çaý', 'Ownuk ýaprakly gök çaý', 'Iri ýaprakly gara çaý', 'Ownuk ýaprakly gara çaý'];
        $name_en = ['Large leaved green tea', 'Small leaved green tea', 'Large leaved black tea', 'Small leaved black tea',];
        $name_ru = ['Крупнолистный зеленый чай', 'Мелколистный зеленый чай', 'Крупнолистный черный чай', 'Мелколистный черный чай'];

        $desc = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laboriosam a sunt molestiae voluptatem beatae voluptates, exercitationem consequuntur! Sit ullam dicta voluptatem nemo, rerum maiores voluptas et voluptatum nulla non?';

        $images = [
            [
                ['thumb' => 'assets/tea/baychay/baychay-iri-yaprakly-gok-chay-1-on.jpg',   'original' => 'assets/tea/baychay/baychay-iri-yaprakly-gok-chay-1-on.jpg'],
                ['thumb' => 'assets/tea/baychay/baychay-iri-yaprakly-gok-chay-2-arka.jpg', 'original' => 'assets/tea/baychay/baychay-iri-yaprakly-gok-chay-2-arka.jpg'],
            ],
            [
                ['thumb' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gok-chay-1-on.jpg',   'original' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gok-chay-1-on.jpg'],
                ['thumb' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gok-chay-2-arka.jpg', 'original' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gok-chay-2-arka.jpg'],
            ],
            [
                ['thumb' => 'assets/tea/baychay/baychay-iri-yaprakly-gara-chay-1-on.jpg',   'original' => 'assets/tea/baychay/baychay-iri-yaprakly-gara-chay-1-on.jpg'],
                ['thumb' => 'assets/tea/baychay/baychay-iri-yaprakly-gara-chay-2-arka.jpg', 'original' => 'assets/tea/baychay/baychay-iri-yaprakly-gara-chay-2-arka.jpg'],
            ],
            [
                ['thumb' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gara-chay-1-on.jpg',   'original' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gara-chay-1-on.jpg'],
                ['thumb' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gara-chay-2-arka.jpg', 'original' => 'assets/tea/baychay/baychay-ownuk-yaprakly-gara-chay-2-arka.jpg'],
            ],
        ];

        
        
        for($i=0; $i<4; $i++){
            $price = mt_rand(10, 30);
            $percent = null;

            if($sale_name[$i]){
                $percent = $price - ($price*$sale_name[$i]/100);
            }

            Product::Create([
                'name_tm' => $name_tm[$i],
                'name_en' => $name_en[$i],
                'name_ru' => $name_ru[$i],
                'desc_tm' => $desc,
                'desc_en' => $desc,
                'desc_ru' => $desc,
                'images' => $images[$i],
                'price' => $price,
                'sale_price' => $percent,
                'sale_type' => mt_rand(0, 1) == 0 ? 'New' : '',
                'discount' => $sale_name[$i],
            ]);
        }
    }
}
