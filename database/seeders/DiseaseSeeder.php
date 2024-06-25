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
            'id' => '1',
            'name' => 'Apple___Apple_scab',
            'description' => 'Leaves: Olive-green to brown spots, often with a velvety texture, leading to early leaf drop. Fruits: Dark, scabby lesions on the surface, causing deformities and reducing fruit quality. Twigs: Infected young twigs may show small lesions and may die back.',
            'image' => url('storage/disease/1.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant scab-resistant apple varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Cultural Practices: Remove and destroy fallen leaves and fruit to reduce overwintering fungal spores.',
            'Treatment' => 'Fungicides: Apply fungicides such as captan, myclobutanil, or sulfur at green tip stage and continue throughout the season. Pruning: Prune to improve air circulation and remove infected material. Sanitation: Collect and dispose of fallen leaves and fruit.'
        ]);


        Disease::create([
            'id' => '2',
            'name' => 'Apple___Black_rot',
            'description' => 'Leaves: Purple or black spots with a concentric ring pattern, leading to leaf drop. Fruits: Large, circular, black, and sunken lesions, eventually causing the fruit to shrivel. Twigs: Cankers on branches and trunks with a rough, black appearance.',
            'image' => url('storage/disease/2.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant disease-resistant varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Cultural Practices: Remove and destroy infected branches, fruit, and fallen leaves.',
            'Treatment' => 'Fungicides: Use fungicides such as thiophanate-methyl, myclobutanil, or captan during the growing season. Pruning: Remove and dispose of infected plant material. Sanitation: Maintain tree health through proper fertilization and watering.'
        ]);


        Disease::create([
            'id' => '3',
            'name' => 'Apple___Cedar_apple_rust',
            'description' => 'Leaves: Yellow-orange spots on upper leaf surfaces, often enlarging with red borders. Severe cases lead to leaf loss, weakening trees.Fruits: Small yellow-orange spots on fruit, potentially causing premature fruit drop and reduced quality.Twigs: Swellings or galls on twigs, reddish-brown with gelatinous orange tendrils during wet weather, leading to twig dieback ',
            'image' => url('storage/disease/3.jpg'),
            'Prevention' => 'Preventive Measures : Resistant Varieties: Plant resistant apple varieties, consult local agriculture for recommendations.Spacing: Keep apple, cedar trees apart to reduce spore transmission.Cultural Practices: Proper pruning, fertilization, watering to maintain tree health, reduce infection. ' ,
            'Treatment' =>'Fungicides: Use myclobutanil, propiconazole, or mancozeb during growth season.Pruning: Remove infected twigs, branches from apple and nearby cedar trees.Sanitation: Collect, dispose fallen leaves, fruit '
        ]);

        Disease::create([
            'id' => '4',
            'name' => 'Cherry___Powdery_mildew',
            'description' => 'Leaves: White, powdery fungal growth on both sides of leaves, causing curling and distortion. Severe infections can lead to early leaf drop. Fruits: Infected fruits may become covered with a white fungal coating, leading to stunted growth and cracking. Twigs: Infected young shoots may show white powdery growth and stunted development.',
            'image' => url('storage/disease/4.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant powdery mildew-resistant cherry varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Cultural Practices: Remove and destroy fallen leaves and infected plant parts to reduce fungal spores.',
            'Treatment' => 'Fungicides: Use fungicides such as sulfur, myclobutanil, or neem oil during the growing season. Pruning: Prune to improve air circulation and remove infected material. Sanitation: Maintain tree health through proper fertilization and watering.'
        ]);


        Disease::create([
            'id' => '5',
            'name' => 'Corn_(maize)___Cercospora_leaf_spot',
            'description' => 'Leaves: Small, rectangular, gray to tan lesions with a distinct dark border, often leading to blight and premature leaf drop. Severe infections can reduce photosynthesis and grain yield.',
            'image' => url('storage/disease/5.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant Cercospora-resistant corn varieties. Rotation: Rotate crops to reduce the buildup of fungal spores. Cultural Practices: Avoid overhead irrigation to reduce leaf wetness.',
            'Treatment' => 'Fungicides: Use fungicides such as strobilurins and triazoles during the growing season. Sanitation: Remove and destroy infected crop residues. Monitoring: Regularly scout fields and apply treatments early in the infection cycle.'
        ]);


        Disease::create([
            'id' => '6',
            'name' => 'Corn_(maize)___Northern_leaf_blight',
            'description' => 'Leaves: Large, elongated, grayish-green lesions that eventually turn tan and dry out. Severe infections can lead to significant leaf area loss and reduced grain yield.',
            'image' => url('storage/disease/6.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant Northern Leaf Blight-resistant corn varieties. Rotation: Rotate crops to break the disease cycle. Cultural Practices: Avoid dense planting to reduce humidity around plants.',
            'Treatment' => 'Fungicides: Use fungicides such as azoxystrobin, pyraclostrobin, or propiconazole. Sanitation: Remove and destroy infected crop residues. Monitoring: Regularly scout fields and apply treatments early in the infection cycle.'
        ]);


        Disease::create([
            'id' => '7',
            'name' => 'Corn_(maize)___Cedar_apple_rust',
            'description' => 'Note: Cedar Apple Rust typically affects apple and juniper trees and not corn. Ensure correct disease identification and consider consulting an agricultural extension service for proper management.',
            'image' => url('storage/disease/7.jpg'),
            'Prevention' => 'Preventive Measures: Ensure proper disease identification. Consult local agricultural extension services for appropriate disease management strategies.',
            'Treatment' => 'Treatment Methods: Follow guidelines provided by agricultural experts for managing rust diseases if found affecting corn.'
        ]);


        Disease::create([
            'id' => '8',
            'name' => 'Grape___Black_rot',
            'description' => 'Leaves: Small, brown spots with a darker border, eventually leading to leaf drop. Fruits: Black, shriveled fruits (mummies) with a hard texture, significantly reducing yield and quality. Twigs: Infected shoots show dark lesions and may die back.',
            'image' => url('storage/disease/8.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant black rot-resistant grape varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Cultural Practices: Remove and destroy fallen leaves and mummified fruits to reduce fungal spores.',
            'Treatment' => 'Fungicides: Use fungicides such as myclobutanil, mancozeb, or copper-based products during the growing season. Pruning: Remove infected twigs and branches to reduce disease spread. Sanitation: Collect and dispose of fallen leaves and mummified fruits.'
        ]);


        Disease::create([
            'id' => '9',
            'name' => 'Grapevine___Esca_(Black_measles)',
            'description' => 'Leaves: Interveinal chlorosis and necrosis, sometimes with red or yellow margins. Severe infections lead to premature leaf drop. Fruits: Dark, sunken spots on berries, often leading to cracking and fruit drop. Wood: Black streaks or spots in the wood, which weaken the vine and reduce productivity.',
            'image' => url('storage/disease/9.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant esca-resistant grape varieties. Sanitation: Remove and destroy infected plant material. Cultural Practices: Ensure proper pruning and avoid mechanical injuries to vines.',
            'Treatment' => 'Treatment Methods: Fungicides: Use fungicides such as tebuconazole or thiophanate-methyl during the growing season. Pruning: Remove and destroy infected shoots and canes. Sanitation: Practice good vineyard hygiene to reduce the spread of the disease.'
        ]);


        Disease::create([
            'id' => '10',
            'name' => 'Grape___Leaf_blight_(Isariopsis_leaf_spot)',
            'description' => 'Leaves: Small, circular to irregular, dark brown to black spots with a yellow halo. Severe infections cause leaf blight and premature leaf drop, reducing photosynthesis and yield.',
            'image' => url('storage/disease/10.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant disease-resistant grape varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Sanitation: Remove and destroy fallen leaves and infected plant parts.',
            'Treatment' => 'Treatment Methods: Fungicides: Apply fungicides such as mancozeb or copper-based products. Pruning: Remove infected leaves and improve air circulation through proper pruning. Sanitation: Collect and dispose of fallen leaves and debris.'
        ]);


        Disease::create([
            'id' => '11',
            'name' => 'Orange___Huanglongbing_(Citrus_Greening)',
            'description' => 'Leaves: Yellowing of leaf veins and asymmetrical blotchy mottle. Fruits: Small, misshapen fruits with a bitter taste and premature fruit drop. Overall Tree: Decline in tree health, reduced yield, and eventual tree death.',
            'image' => url('storage/disease/11.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Use disease-free planting material. Monitoring: Implement regular monitoring and early detection. Cultural Practices: Practice good orchard sanitation and remove plant debris.',
            'Treatment' => 'Treatment Methods: Insecticides: Apply insecticides to control the Asian citrus psyllid population. Removal: Remove and destroy infected trees to prevent disease spread. Research: Use antimicrobial treatments, though effectiveness is limited and still under research.'
        ]);


        Disease::create([
            'id' => '12',
            'name' => 'Peach___Bacterial_spot',
            'description' => 'Leaves: Small, angular, water-soaked spots that turn dark and may drop out, giving a shot-hole appearance. Fruits: Sunken, dark lesions with cracks, leading to fruit deformation and drop. Twigs: Cankers on young twigs, leading to dieback.',
            'image' => url('storage/disease/12.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant bacterial spot-resistant peach varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Sanitation: Remove and destroy fallen leaves and infected plant parts.',
            'Treatment' => 'Treatment Methods: Bactericides: Use copper-based bactericides or antibiotics during the growing season. Pruning: Remove infected twigs and branches to reduce disease spread. Sanitation: Maintain tree health through proper fertilization and watering.'
        ]);


        Disease::create([
            'id' => '13',
            'name' => 'Pepper,_bell___Bacterial_spot',
            'description' => 'Leaves: Water-soaked, dark green spots that turn brown and are often surrounded by a yellow halo. Severe infections cause leaf drop. Fruits: Raised, rough, dark brown to black spots, reducing fruit quality. Stems: Dark streaks or cankers on stems, leading to dieback.',
            'image' => url('storage/disease/13.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant bacterial spot-resistant bell pepper varieties. Rotation: Rotate crops to reduce the buildup of bacterial spores. Sanitation: Remove and destroy infected plant debris.',
            'Treatment' => 'Treatment Methods: Bactericides: Use copper-based bactericides during the growing season. Pruning: Remove infected leaves and stems to reduce disease spread. Sanitation: Practice good garden hygiene and avoid overhead watering.'
        ]);


        Disease::create([
            'id' => '14',
            'name' => 'Potato___Early_blight',
            'description' => 'Leaves: Small, brown lesions with concentric rings, typically on older leaves. Lesions may merge, causing significant leaf blight. Tubers: Dark, sunken lesions on tubers with a dry, corky rot underneath.',
            'image' => url('storage/disease/14.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant early blight-resistant potato varieties. Rotation: Rotate crops to reduce fungal spore buildup. Cultural Practices: Remove and destroy infected plant debris and avoid overhead irrigation.',
            'Treatment' => 'Treatment Methods: Fungicides: Apply fungicides such as chlorothalonil or mancozeb during the growing season. Pruning: Remove infected leaves to reduce disease spread. Sanitation: Maintain good garden hygiene and proper spacing for air circulation.'
        ]);


        Disease::create([
            'id' => '15',
            'name' => 'Potato___Late_blight',
            'description' => 'Leaves: Water-soaked, gray-green lesions that turn brown and necrotic, often with a pale green border. Tubers: Irregular, brown to purple lesions on the surface, with a firm, reddish-brown decay extending into the tuber flesh.',
            'image' => url('storage/disease/15.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant late blight-resistant potato varieties. Monitoring: Regularly monitor plants for early signs of infection. Cultural Practices: Avoid overhead irrigation and ensure proper spacing for air circulation.',
            'Treatment' => 'Treatment Methods: Fungicides: Use fungicides such as metalaxyl or cyazofamid. Removal: Remove and destroy infected plants and tubers. Sanitation: Implement crop rotation and avoid planting potatoes near last year’s tomato or potato crops.'
        ]);


        Disease::create([
            'id' => '16',
            'name' => 'Squash___Powdery_mildew',
            'description' => 'Leaves: White, powdery fungal growth on both sides of leaves, causing them to yellow and dry out prematurely. Stems: White fungal growth can also appear on stems, leading to weakened plants and reduced yield.',
            'image' => url('storage/disease/16.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant powdery mildew-resistant squash varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Cultural Practices: Avoid overhead watering and remove infected leaves.',
            'Treatment' => 'Treatment Methods: Fungicides: Apply fungicides such as sulfur, potassium bicarbonate, or neem oil. Pruning: Remove and destroy infected leaves to reduce spore spread. Sanitation: Practice good garden hygiene and maintain healthy plants.'
        ]);


        Disease::create([
            'id' => '17',
            'name' => 'Strawberry___Leaf_scorch',
            'description' => 'Leaves: Irregular, dark purple to brown spots that may merge, causing large areas of necrosis. Severe infections lead to premature leaf drop, reducing plant vigor and yield.',
            'image' => url('storage/disease/17.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant leaf scorch-resistant strawberry varieties. Spacing: Ensure proper spacing for air circulation. Cultural Practices: Remove and destroy infected plant debris and avoid overhead irrigation.',
            'Treatment' => 'Treatment Methods: Fungicides: Use fungicides such as captan or myclobutanil. Pruning: Remove infected leaves to reduce disease spread. Sanitation: Maintain good garden hygiene and proper watering practices.'
        ]);


        Disease::create([
            'id' => '18',
            'name' => 'Tomato___Bacterial_spot',
            'description' => 'Leaves: Water-soaked, dark green spots that turn brown and may drop out, giving a shot-hole appearance. Fruits: Raised, rough, dark brown to black spots, reducing fruit quality. Stems: Dark streaks or cankers on stems, leading to dieback.',
            'image' => url('storage/disease/18.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant bacterial spot-resistant tomato varieties. Rotation: Rotate crops to reduce the buildup of bacterial spores. Sanitation: Remove and destroy infected plant debris and avoid overhead watering.',
            'Treatment' => 'Treatment Methods: Bactericides: Use copper-based bactericides or antibiotics during the growing season. Pruning: Remove infected leaves and stems to reduce disease spread. Sanitation: Practice good garden hygiene and maintain proper plant spacing.'
        ]);

        Disease::create([
            'id' => '19',
            'name' => 'Tomato___Early_blight',
            'description' => 'Leaves: Small, brown lesions with concentric rings, typically on older leaves. Lesions may merge, causing significant leaf blight and defoliation. Stems: Dark lesions with concentric rings, potentially girdling the stem and causing wilting.',
            'image' => url('storage/disease/19.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant early blight-resistant tomato varieties. Rotation: Rotate crops to reduce fungal spore buildup. Cultural Practices: Remove and destroy infected plant debris and avoid overhead irrigation.',
            'Treatment' => 'Treatment Methods: Fungicides: Apply fungicides such as chlorothalonil or mancozeb during the growing season. Pruning: Remove infected leaves to reduce disease spread. Sanitation: Maintain good garden hygiene and proper spacing for air circulation.'
        ]);

        Disease::create([
            'id' => '20',
            'name' => 'Tomato___Late_blight',
            'description' => 'Leaves: Water-soaked, gray-green lesions that turn brown and necrotic, often with a pale green border. Fruits: Large, irregular, greasy, dark lesions that can cover most of the fruit. Stems: Dark, water-soaked lesions that can girdle the stem, leading to plant collapse.',
            'image' => url('storage/disease/20.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant late blight-resistant tomato varieties. Monitoring: Regularly monitor plants for early signs of infection. Cultural Practices: Avoid overhead irrigation and ensure proper spacing for air circulation.',
            'Treatment' => 'Treatment Methods: Fungicides: Use fungicides such as metalaxyl or cyazofamid. Removal: Remove and destroy infected plants and fruits. Sanitation: Implement crop rotation and avoid planting tomatoes near last year’s potato or tomato crops.'
        ]);

        Disease::create([
            'id' => '21',
            'name' => 'Tomato___Leaf_Mold',
            'description' => 'Leaves: Yellow spots on the upper surface and olive-green to grayish-purple mold on the underside. Severe infections cause leaves to curl, wither, and drop prematurely. Fruits: Mold can spread to fruits, causing a black, sooty appearance and reducing quality.',
            'image' => url('storage/disease/21.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant leaf mold-resistant tomato varieties. Spacing: Ensure proper spacing for air circulation. Cultural Practices: Remove and destroy infected plant debris and avoid overhead irrigation.',
            'Treatment' => 'Treatment Methods: Fungicides: Apply fungicides such as chlorothalonil or copper-based products. Pruning: Remove infected leaves and improve air circulation through proper pruning. Sanitation: Maintain good greenhouse or garden hygiene and proper ventilation.'
        ]);

        Disease::create([
            'id' => '22',
            'name' => 'Tomato___Septoria_leaf_spot',
            'description' => 'Leaves: Small, circular, water-soaked spots with dark borders and tan centers. Severe infections lead to significant leaf blight and defoliation, reducing plant vigor and yield. Stems: In rare cases, lesions may appear on stems and fruit.',
            'image' => url('storage/disease/22.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant Septoria-resistant tomato varieties. Rotation: Rotate crops to reduce fungal spore buildup. Cultural Practices: Remove and destroy infected plant debris and avoid overhead irrigation.',
            'Treatment' => 'Treatment Methods: Fungicides: Use fungicides such as mancozeb or copper-based products during the growing season. Pruning: Remove infected leaves to reduce disease spread. Sanitation: Maintain good garden hygiene and proper spacing for air circulation.'
        ]);

        Disease::create([
            'id' => '23',
            'name' => 'Tomato___Spider_mites_Two-spotted_spider_mite',
            'description' => 'Leaves: Tiny, yellow speckles that eventually lead to bronzing and leaf drop. Webbing may be present in severe infestations. Fruits: Reduced fruit size and quality due to stress from mite feeding. Overall Plant: Stunted growth and reduced vigor due to extensive leaf damage.',
            'image' => url('storage/disease/23.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Choose mite-resistant tomato varieties. Monitoring: Regularly monitor plants for early signs of mite infestation. Cultural Practices: Maintain plant health through proper watering and fertilization.',
            'Treatment' => 'Treatment Methods: Miticides: Use miticides such as abamectin or bifenazate. Biological Control: Introduce natural predators like predatory mites. Sanitation: Remove heavily infested plant parts and maintain good garden hygiene.'
        ]);

        Disease::create([
            'id' => '24',
            'name' => 'Tomato___Target_Spot',
            'description' => 'Leaves: Small, dark brown spots with a light tan center, often surrounded by a yellow halo. Severe infections can cause significant leaf blight and defoliation. Fruits: Small, dark, sunken spots that may enlarge and coalesce, reducing fruit quality.',
            'image' => url('storage/disease/24.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant target spot-resistant tomato varieties. Spacing: Ensure proper spacing and pruning for better air circulation. Cultural Practices: Remove and destroy infected plant debris and avoid overhead irrigation.',
            'Treatment' => 'Treatment Methods: Fungicides: Apply fungicides such as chlorothalonil or mancozeb during the growing season. Pruning: Remove infected leaves to reduce disease spread. Sanitation: Maintain good garden hygiene and proper spacing for air circulation.'
        ]);

        Disease::create([
            'id' => '25',
            'name' => 'Tomato___Tomato_mosaic_virus',
            'description' => 'Leaves: Mottled light and dark green areas, often with a blistered or fern-like appearance. Infected leaves may become twisted or malformed. Fruits: Discolored or mottled areas, sometimes with internal browning of the fruit.',
            'image' => url('storage/disease/25.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant tomato mosaic virus-resistant varieties. Sanitation: Use disease-free seeds and transplants. Avoid handling plants excessively to prevent mechanical transmission of the virus.',
            'Treatment' => 'Treatment Methods: There are no effective chemical treatments for viruses. Remove and destroy infected plants to prevent the spread. Control: Manage insect vectors such as aphids that can transmit the virus. Sanitation: Practice good garden hygiene and disinfect tools and hands after handling infected plants.'
        ]);

        Disease::create([
            'id' => '26',
            'name' => 'Tomato___Tomato_Yellow_Leaf_Curl_Virus',
            'description' => 'Leaves: Yellowing of leaf margins, upward leaf curling, and reduced leaf size. Infected plants show stunted growth and reduced fruit set. Fruits: Reduced number and size of fruits, leading to significant yield loss.',
            'image' => url('storage/disease/26.jpg'),
            'Prevention' => 'Preventive Measures: Resistant Varieties: Plant tomato yellow leaf curl virus-resistant varieties. Monitoring: Regularly monitor for whiteflies, the primary vector of the virus. Cultural Practices: Use reflective mulches to repel whiteflies and maintain proper plant spacing.',
            'Treatment' => 'Treatment Methods: Insecticides: Use insecticides to control whitefly populations. Removal: Remove and destroy infected plants to prevent the spread. Barriers: Use physical barriers such as row covers to protect plants from whiteflies. Sanitation: Implement good garden hygiene and control weed hosts that can harbor the virus.'
        ]);

    }

}
