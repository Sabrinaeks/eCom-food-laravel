<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'ARABIC CHICKEN KEBAB',
                'price' => '80.000',
                'description' => 'Sauce Kebab, Grilled Chicken, Bawang, Paprika Hijau, Tomat,',
                'category' => "makanan",
                'gallery' => "https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/c/h/chicken_kebab_side.png"
            ],
            [
                'name' => 'ULTIMATE MEAT OVERLOAD',
                'price' => '80.500',
                'description' => 'Sauce BBQ, Sauce Keju, Keju Mozzarella, Beef Pepperoni, Beef,',
                'category' => "makanan",
                'gallery' => "https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/u/l/ultimate_meat_overload.png"
            ],
            [
                'name' => 'CHESSY MEATBALL BLAST',
                'price' => '83.999',
                'description' => 'BBQ Sauce, Liquid Cheese Sauce, Onion, Meatball, Parsley,',
                'category' => "makanan",
                'gallery' => "https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/m/e/meatballpizzathumbnail.png"
            ],
            [
                'name' => 'GRILLED BEEF SUPREME',
                'price' => '79.909',
                'description' => 'BBQ Sauce, Cheese Sauce, Onion, Beef Burger, Jalapeno, Mozzarella',
                'category' => "makanan",
                'gallery' => "https://dom-repo-olo-prod.oss-ap-southeast-5.aliyuncs.com/catalog/product/cache/2/small_image/187x/9df78eab33525d08d6e5fb8d27136e95/g/r/grill-beef-supreme-550x550px.png"
            ]
        ]);
    }
}
