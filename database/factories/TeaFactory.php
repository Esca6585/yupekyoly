<?php

namespace Database\Factories;

use App\Models\Tea;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class TeaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tea::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sale_name = ['0', '15', '0', '25'];
        
        $name_tm = ['Iri ýaprakly gök çaý', 'Ownuk ýaprakly gök çaý', 'Iri ýaprakly gara çaý', 'Ownuk ýaprakly gara çaý'];
        $name_en = ['Large leaved green tea', 'Small leaved green tea', 'Large leaved black tea', 'Small leaved black tea',];
        $name_ru = ['Крупнолистный зеленый чай', 'Мелколистный зеленый чай', 'Крупнолистный черный чай', 'Мелколистный черный чай'];

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


        $random = mt_rand(0, 3);
        $price = mt_rand(10, 30);

        $percent = null;

        if($sale_name[$random]){
            $percent = $price - ($price*$sale_name[$random]/100);
        }

        return [
            'name_tm' => $name_tm[$random],
            'name_en' => $name_en[$random],
            'name_ru' => $name_ru[$random],
            'images' => $images[$random],
            'price' => $price,
            'sale_price' => $percent,
            'sale_type' => mt_rand(0, 1) == 0 ? 'New' : '',
            'discount' => $sale_name[$random],
        ];
    }
}
