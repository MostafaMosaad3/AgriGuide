<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disease::create([
            'id'=>'1' ,
            'name'=>'Powdery Mildew' ,
            'description'=>'A fungal disease that appears as a white, powdery substance on leaves and stems.' ,
            'image'=>url('storage/disease/1.jpg') ,
            'Prevention and Control' => 'Prevention: Ensure proper spacing between plants to promote air circulation,
                                                     avoid overhead watering, and use resistant varieties when available.
            Control: Apply fungicides such as sulfur, potassium bicarbonate, or neem oil at the first sign of infection.'
        ]);

        Disease::create([
            'id'=>'2' ,
            'name'=>'Late Blight' ,
            'description'=>'A fungal disease affecting potato and tomato plants, causing dark lesions on leaves and stems.' ,
            'image'=>url('storage/disease/2.jpg') ,
            'Prevention and Control' => 'Prevention: Rotate crops, remove infected plant debris, and avoid overhead watering.
            Control: Apply copper-based fungicides preventatively, especially during periods of high humidity'
        ]);

        Disease::create([
            'id'=>'3' ,
            'name'=>'Downy Mildew' ,
            'description'=>'A fungal disease causing yellow spots on leaves that eventually turn brown and may cause defoliation' ,
            'image'=>url('storage/disease/3.jpg') ,
            'Prevention and Control' => 'Prevention: Plant resistant varieties, avoid overhead watering, and maintain good air circulation..
            Control:Apply fungicides containing copper or phosphorous acids according to label instructions '
        ]);

        Disease::create([
            'id'=>'4' ,
            'name'=>'Fusarium Wilt' ,
            'description'=>'A soil-borne fungal disease causing wilting, stunting, and yellowing of leaves in various crops.' ,
            'image'=>url('storage/disease/4.jpg') ,
            'Prevention and Control' => 'Prevention: Use disease-free seeds and transplants, rotate crops, and practice soil solarization
            Control: Apply biocontrol agents, such as Trichoderma spp., or fungicides containing thiophanate-methyl'
        ]);

        Disease::create([
            'id'=>'5' ,
            'name'=>'Anthracnose' ,
            'description'=>'A fungal disease causing dark, sunken lesions on leaves, fruits, and stems of various crops.' ,
            'image'=>url('storage/disease/5.jpg') ,
            'Prevention and Control' => 'Prevention:Remove infected plant debris, practice crop rotation, and avoid overhead irrigation.
            Control:Apply fungicides containing chlorothalonil or mancozeb before symptoms appear.'
        ]);

        Disease::create([
            'id'=>'6' ,
            'name'=>'Verticillium Wilt' ,
            'description'=>'A soil-borne fungal disease causing wilting, yellowing, and necrosis of leaves in various crops.' ,
            'image'=>url('storage/disease/6.jpg') ,
            'Prevention and Control' => 'Use resistant varieties, practice crop rotation, and avoid planting susceptible crops in affected areas.
            Control:Apply fungicides containing thiophanate-methyl or soil fumigants before planting.'
        ]);

        Disease::create([
            'id'=>'7' ,
            'name'=>'Root Rot' ,
            'description'=>'A disease caused by various soil-borne pathogens leading to decay of plant roots and reduced water and nutrient uptake' ,
            'image'=>url('storage/disease/7.jpg') ,
            'Prevention and Control' => 'Prevention:Ensure proper drainage, avoid overwatering, and use disease-free planting material.
            Control:Apply biocontrol agents like Trichoderma spp., or fungicides containing metalaxyl-m according to label instructions.'
        ]);

        Disease::create([
            'id'=>'8' ,
            'name'=>'Rust' ,
            'description'=>'A fungal disease characterized by orange or reddish-brown pustules on leaves and stems, leading to reduced photosynthesis.' ,
            'image'=>url('storage/disease/8.jpg') ,
            'Prevention and Control' => 'Prevention: Plant resistant varieties, remove infected plant material, and practice proper sanitation.
            Control:Apply fungicides containing triazoles or strobilurins preventatively during favorable conditions'
        ]);

        Disease::create([
            'id'=>'9' ,
            'name'=>'Bacterial Blight' ,
            'description'=>'A bacterial disease causing water-soaked lesions on leaves and fruits, often leading to tissue necrosis' ,
            'image'=>url('storage/disease/9.jpg') ,
            'Prevention and Control' => 'Prevention: Plant disease-free seeds, practice crop rotation, and avoid overhead watering..
            Control:Apply copper-based bactericides or streptomycin according to label instructions.'
        ]);

        Disease::create([
            'id'=>'10' ,
            'name'=>'Grey Mold' ,
            'description'=>'A fungal disease causing greyish-brown fuzzy growth on leaves, flowers, and fruits, especially in humid conditions' ,
            'image'=>url('storage/disease/10.jpg') ,
            'Prevention and Control' => 'Prevention: Promote good air circulation, avoid excessive nitrogen fertilization, and remove infected plant material promptly.
            Control:Apply fungicides containing boscalid or iprodione before flowering or during disease onset.'
        ]);
    }
}
