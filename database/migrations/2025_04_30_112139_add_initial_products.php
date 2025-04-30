<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Adicionar os produtos que já estão na view
        DB::table('products')->insert([
            // Categoria: Frutas Frescas
            [
                'name' => 'Papaias',
                'description' => 'Nossas papaias são cultivadas com carinho e colhidas no ponto ideal de maturação para garantir o melhor sabor e propriedades nutricionais.',
                'category' => 'Frutas',
                'image' => 'https://th.bing.com/th/id/R.91f0386c054777e445d70398fd0c394b?rik=ppanF0NQl2xjzA&riu=http%3a%2f%2fwww.salepepe.it%2ffiles%2f2014%2f02%2fpapaia.jpg&ehk=oJGdFha7Jeki6HfQsbSKAaYJEdeJ92nGPkGx4im2%2b6s%3d&risl=&pid=ImgRaw&r=0', // Será atualizada posteriormente
                'available' => true,
                'featured' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tomates',
                'description' => 'Suculentos e saborosos, nossos tomates são cultivados em estufas controladas, garantindo qualidade e sabor em todas as estações.',
                'category' => 'Frutas',
                'image' => 'https://th.bing.com/th/id/OIP.bi1my5kl2XsXs7zyoNGLpQHaE8?rs=1&pid=ImgDetMain',
                'available' => true,
                'featured' => false,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pimentos',
                'description' => 'Doces e coloridos, nossos pimentos são perfeitos para saladas, assados ou recheados, trazendo cor e nutrientes à sua mesa.',
                'category' => 'Frutas',
                'image' => 'https://pepperjoe.com/cdn/shop/products/KingoftheNorth2.jpg?v=1646923240&width=493',
                'available' => true,
                'featured' => false,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            // Categoria: Legumes
            [
                'name' => 'Tabuleiros Plantados',
                'description' => 'Perfeitos para iniciar sua própria horta, nossos tabuleiros já vêm prontos com mudas selecionadas e são feitos com materiais ecológicos.',
                'category' => 'Legumes',
                'image' => 'https://sarabackmo.com/wp-content/uploads/2017/04/skillnadenstradgard_sallat_pluggbratte-945x630.jpg',
                'available' => true,
                'featured' => false,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Milho',
                'description' => 'O nosso milho é cultivado com técnicas tradicionais e sustentáveis, resultando em maçarocas doces e suculentas, perfeitas para diversos pratos da gastronomia portuguesa.',
                'category' => 'Legumes',
                'image' => 'https://imagens-cdn.canalrural.com.br/wp-content/uploads/milho-.jpg',
                'available' => true,
                'featured' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Couves',
                'description' => 'As nossas couves são cultivadas com todo o cuidado, resultando em folhas frescas e nutritivas, ideais para sopas, caldos verdes e outros pratos tradicionais da gastronomia portuguesa.',
                'category' => 'Legumes',
                'image' => 'https://www.growingproduce.com/wp-content/uploads/2023/09/w_Verve_Greens_Seedway_gallery-863x576.jpg',
                'available' => false,
                'featured' => false,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('products')->whereIn('name', [
            'Papaias', 'Tomates', 'Pimentos', 
            'Tabuleiros Plantados', 'Milho', 'Couves'
        ])->delete();
    }
};