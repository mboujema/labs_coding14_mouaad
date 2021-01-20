<?php

namespace Database\Seeders;

use App\Models\Banniere;
use App\Models\Cardrapid;
use App\Models\Categorie;
use App\Models\Navbar;
use App\Models\Testimonial;
use App\Models\Testimonialt;
use App\Models\TestimonialTitle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(VerificationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(NavbarSeeder::class);
        $this->call(SloganSeeder::class);        
        $this->call(BanniereSeeder::class);
        $this->call(CardrapidSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(PrimetSeeder::class);
        $this->call(MapSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(TagSeeder::class);

    }
}
