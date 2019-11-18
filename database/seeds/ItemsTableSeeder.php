<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 1 - set
        DB::table('items')->insert([
            'name'  		=> 'Hot Crispy Chicken (Set)',
            'price' 		=> '5300',
            'photo' 		=> '/storage/item/1549876841.png',
            'description' 	=> 'Hot Crispy Chicken, Potato, Pepsi',
            'category_id' 	=> 1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Bulgogi (Set)',
            'price' 		=> '4800',
            'photo' 		=> '/storage/item/1549876970.png',
            'description' 	=> 'Bulgogi Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Wild Shrimp (Set)',
            'price' 		=> '5700',
            'photo' 		=> '/storage/item/1549877032.png',
            'description' 	=> 'Wild Shrimp Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Rib Sand (Set)',
            'price' 		=> '4800',
            'photo' 		=> '/storage/item/1549877177.png',
            'description' 	=> 'Rib Sand Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Giant Double (Set)',
            'price' 		=> '4500',
            'photo' 		=> '/storage/item/1549877238.png',
            'description' 	=> 'Giant Double Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Crazy Hot Single (Set)',
            'price' 		=> '4800',
            'photo' 		=> '/storage/item/1549877239.jpg',
            'description' 	=> 'Crazy Hot Single Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Crazy Hot Double (Set)',
            'price' 		=> '6100',
            'photo' 		=> '/storage/item/1549877240.jpg',
            'description' 	=> 'Crazy Hot Double Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Burger (Set)',
            'price' 		=> '4600',
            'photo' 		=> '/storage/item/1549877241.png',
            'description' 	=> 'Chicken Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Cheese (Set)',
            'price' 		=> '4900',
            'photo' 		=> '/storage/item/1549877242.png',
            'description' 	=> 'Cheese Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Teri (Set)',
            'price' 		=> '4600',
            'photo' 		=> '/storage/item/1549877243.png',
            'description' 	=> 'Teri Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Hamburger (Set)',
            'price' 		=> '4000',
            'photo' 		=> '/storage/item/1549877244.jpg',
            'description' 	=> 'Burger, Potato, Pepsi',
            'category_id' 	=>	1
        ]);


        // 2 - Hamburger
        DB::table('items')->insert([
            'name'  		=> 'Hot Crispy Chicken',
            'price' 		=> '3800',
            'photo' 		=> '/storage/item/1549877245.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Bulgogi',
            'price' 		=> '3900',
            'photo' 		=> '/storage/item/1549877246.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Wild Shrimp',
            'price' 		=> '4300',
            'photo' 		=> '/storage/item/1549877247.jpg',
            'description' 	=> '',
            'category_id' 	=> 2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Rib Sand',
            'price' 		=> '3300',
            'photo' 		=> '/storage/item/1549877248.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Crazy Hot Single',
            'price' 		=> '3300',
            'photo' 		=> '/storage/item/1549877249.jpg',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Crazy Hot Double',
            'price' 		=> '4700',
            'photo' 		=> '/storage/item/1549877250.jpg',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Giant Double',
            'price' 		=> '4400',
            'photo' 		=> '/storage/item/1549877251.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Burger',
            'price' 		=> '4700',
            'photo' 		=> '/storage/item/1549877252.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Cheese',
            'price' 		=> '3400',
            'photo' 		=> '/storage/item/1549877253.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Teri',
            'price' 		=> '3100',
            'photo' 		=> '/storage/item/1549877254.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Hamburger',
            'price' 		=> '2600',
            'photo' 		=> '/storage/item/1549877255.png',
            'description' 	=> '',
            'category_id' 	=>	2
        ]);

        // 3 Chicken

        DB::table('items')->insert([
            'name'  		=> 'Chicken (original)',
            'price' 		=> '1600',
            'photo' 		=> '/storage/item/1549877256.png',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken (spicy)',
            'price' 		=> '1600',
            'photo' 		=> '/storage/item/1549877257.png',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Half Pack (Original)',
            'price' 		=> '6400',
            'photo' 		=> '/storage/item/1549877258.jpg',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Half Pack (Spicy)',
            'price' 		=> '6400',
            'photo' 		=> '/storage/item/1549877259.jpg',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Full Pack (Original)',
            'price' 		=> '14000',
            'photo' 		=> '/storage/item/1549877260.png',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);


        DB::table('items')->insert([
            'name'  		=> 'Chicken Full Pack (Spicy)',
            'price' 		=> '14000',
            'photo' 		=> '/storage/item/1549877261.png',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Korea Chicken(Half)',
            'price' 		=> '2900',
            'photo' 		=> '/storage/item/1549877262.jpg',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Korea Chicken(Full)',
            'price' 		=> '5100',
            'photo' 		=> '/storage/item/1549877263.jpg',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Cheesy Chicken(Half)',
            'price' 		=> '2400',
            'photo' 		=> '/storage/item/1549877264.jpeg',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Cheesy Chicken(Full)',
            'price' 		=> '4700',
            'photo' 		=> '/storage/item/1549877265.jpeg',
            'description' 	=> '',
            'category_id' 	=>	3
        ]);

        // 4 Rice

        DB::table('items')->insert([
            'name'  		=> 'Korea Chicken Rice',
            'price' 		=> '3100',
            'photo' 		=> '/storage/item/1549877266.jpg',
            'description' 	=> '',
            'category_id' 	=>	4
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Rice (Original)',
            'price' 		=> '2900',
            'photo' 		=> '/storage/item/1549877267.jpg',
            'description' 	=> '',
            'category_id' 	=>	4
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Rice (Spicy)',
            'price' 		=> '2900',
            'photo' 		=> '/storage/item/1549877268.jpg',
            'description' 	=> '',
            'category_id' 	=>	4
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Sambal Chicken Rice (Original)',
            'price' 		=> '3400',
            'photo' 		=> '/storage/item/1549877269.jpg',
            'description' 	=> '',
            'category_id' 	=>	4
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Sambal Chicken Rice (Spicy)',
            'price' 		=> '3400',
            'photo' 		=> '/storage/item/1549877270.jpg',
            'description' 	=> '',
            'category_id' 	=>	4
        ]);

        //5 Appetizer
        DB::table('items')->insert([
            'name'  		=> 'Potato',
            'price' 		=> '1100',
            'photo' 		=> '/storage/item/1549877271.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Seasoning Potato (Chilli) ',
            'price' 		=> '1500',
            'photo' 		=> '/storage/item/1549877272.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Seasoning Potato (Onion) ',
            'price' 		=> '1500',
            'photo' 		=> '/storage/item/1549877272.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Seasoning Potato (Onion) ',
            'price' 		=> '1500',
            'photo' 		=> '/storage/item/1549877272.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Shake Shake (Chilli) ',
            'price' 		=> '2600',
            'photo' 		=> '/storage/item/1549877273.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Shake Shake (Onion) ',
            'price' 		=> '2600',
            'photo' 		=> '/storage/item/1549877273.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Cheese Stick',
            'price' 		=> '1500',
            'photo' 		=> '/storage/item/1549877274.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Crunch Shrimp',
            'price' 		=> '1600',
            'photo' 		=> '/storage/item/1549877275.jpg',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Squid Ring',
            'price' 		=> '1600',
            'photo' 		=> '/storage/item/1549877276.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Hash Brown',
            'price' 		=> '1500',
            'photo' 		=> '/storage/item/1549877277.png',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Nugget( 5 pcs )',
            'price' 		=> '1800',
            'photo' 		=> '/storage/item/1549877278.jpg',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Chicken Nugget( 9 pcs )',
            'price' 		=> '3300',
            'photo' 		=> '/storage/item/1549877278.jpg',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

		DB::table('items')->insert([
            'name'  		=> 'Fish Finger',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877279.jpg',
            'description' 	=> '',
            'category_id' 	=>	5
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Cheesy Potato',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877280.jpeg',
            'description' 	=> '',
            'category_id' 	=>	5
        ]);

        // 6 Dessert
        DB::table('items')->insert([
            'name'  		=> 'Soft Cone',
            'price' 		=> '800',
            'photo' 		=> '/storage/item/1549877281.png',
            'description' 	=> '',
            'category_id' 	=>	6
        ]);  

        DB::table('items')->insert([
            'name'  		=> 'Marble Soft Cone',
            'price' 		=> '1200',
            'photo' 		=> '/storage/item/1549877282.png',
            'description' 	=> '',
            'category_id' 	=>	6
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Tornado Choco Cookie',
            'price' 		=> '1800',
            'photo' 		=> '/storage/item/1549877283.jpg',
            'description' 	=> '',
            'category_id' 	=>	6
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Magicpop',
            'price' 		=> '1800',
            'photo' 		=> '/storage/item/1549877284.jpg',
            'description' 	=> '',
            'category_id' 	=>	6
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Green Tea',
            'price' 		=> '1800',
            'photo' 		=> '/storage/item/1549877285.jpeg',
            'description' 	=> '',
            'category_id' 	=>	6
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Red Bean Ice Flake',
            'price' 		=> '3500',
            'photo' 		=> '/storage/item/1549877286.jpeg',
            'description' 	=> '',
            'category_id' 	=>	6
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Fruits Ice Flake',
            'price' 		=> '3500',
            'photo' 		=> '/storage/item/1549877287.jpg',
            'description' 	=> '',
            'category_id' 	=>	6
        ]);

        // 7 Drinks

        DB::table('items')->insert([
            'name'  		=> 'Pepsi',
            'price' 		=> '900',
            'photo' 		=> '/storage/item/1549877288.jpg',
            'description' 	=> '',
            'category_id' 	=>	7
        ]);

        DB::table('items')->insert([
            'name'  		=> '7 Up',
            'price' 		=> '900',
            'photo' 		=> '/storage/item/1549877289.jpg',
            'description' 	=> '',
            'category_id' 	=>	7
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Orange Juice',
            'price' 		=> '1000',
            'photo' 		=> '/storage/item/1549877290.png',
            'description' 	=> '',
            'category_id' 	=>	7
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Milo',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877291.png',
            'description' 	=> '',
            'category_id' 	=>	7
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Ice Lemon Tea',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877292.jpg',
            'description' 	=> '',
            'category_id' 	=>	7
        ]);  

        DB::table('items')->insert([
            'name'  		=> 'Fresh Lime Juice',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877293.jpg',
            'description' 	=> '',
            'category_id' 	=>	7
        ]); 

        DB::table('items')->insert([
            'name'  		=> 'Thai Milk Tea',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877294.jpg',
            'description' 	=> '',
            'category_id' 	=>	7
        ]); 

        // 8 Coffee

        DB::table('items')->insert([
            'name'  		=> 'Ice Americano',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877295.jpg',
            'description' 	=> '',
            'category_id' 	=>	8
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Americano',
            'price' 		=> '1300',
            'photo' 		=> '/storage/item/1549877297.jpg',
            'description' 	=> '',
            'category_id' 	=>	8
        ]);

        DB::table('items')->insert([
            'name'  		=> 'Caffe Latte',
            'price' 		=> '1700',
            'photo' 		=> '/storage/item/1549877296.jpg',
            'description' 	=> '',
            'category_id' 	=>	8
        ]);  

        DB::table('items')->insert([
            'name'  		=> 'Cappunccino',
            'price' 		=> '1700',
            'photo' 		=> '/storage/item/1549877298.jpg',
            'description' 	=> '',
            'category_id' 	=>	8
        ]);   
        

    }
}
