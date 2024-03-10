<?php

namespace Database\Seeders;

use App\Models\Soil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soil::create([
           'id'=>'1' ,
            'name'=>'Sandy' ,
            'image'=>url('storage/soil/1.jpg') ,
            'Properties'=>'Sandy soil has a gritty texture and poor water and nutrient retention.
                           It has excellent drainage, which can be beneficial for some plants but may require more frequent watering.
                           Sandy soil warms up quickly in the spring, making it suitable for early planting',

            'Recommended_Water'=>'Drip irrigation or soaker hoses are recommended for sandy soil
                                  to ensure deep watering and minimize water runoff.' ,

            'Recommended_Fertilizers' => 'incorporating organic matter such as compost can improve soil structure .
                                         Slow-release or organic fertilizers  to provide a steady supply of nutrients to plants ',

            'suitable_crops'=>'Potatoes , Sweet Corn , Green Beans , Peppers , Watermelon , Sunflowers , Lettuce , Radishes',

            'additional_notes'=>'Soil amendment: Incorporating organic matter like compost, leaf mulch, or cover crops can help improve clay soil structure, increase drainage, and enhance nutrient availability.
                                 Avoid working clay soil when it,s too wet to prevent compaction and soil damage.
                                 Raised beds or mounded rows can improve drainage and prevent waterlogging in clay soil.
                                 Mulching: Applying mulch to the soil surface can help regulate soil temperature, retain moisture, and reduce erosion in clay soil.',
        ]);


        Soil::create([
            'id'=>'2' ,
            'name'=>'Clay' ,
            'image'=>url('storage/soil/2.jpg') ,
            'Properties'=>'Clay soil has a fine, sticky texture when wet and can become hard and compacted when dry.
                           It has excellent nutrient retention but poor drainage, which can lead to waterlogging and root suffocation.
                           Clay soil warms up slowly in the spring and may take longer to reach ideal planting temperatures compared to sandy soil.',

            'Recommended_Water'=>'Deep, infrequent watering is recommended to encourage deep root growth and prevent surface runoff.
                                  Allow the soil to dry out slightly between waterings to avoid waterlogging.' ,

            'Recommended_Fertilizers' => 'Quick-release fertilizers are often preferred for sandy soil
                                         Organic fertilizers like compost improve soil structure and increase nutrient retention over time.',

            'suitable_crops'=>' Squash , Kale , Spinach , Apples , Pears , Plums , Cabbage',

            'additional_notes'=>'Organic matter amendment: Adding organic matter like compost or mulch can improve sandy soil structure, water retention, and nutrient-holding capacity over time.
                                 Soil testing: Regular soil testing can help determine nutrient levels and guide fertilizer applications to avoid nutrient deficiencies or excesses.
                                 Crop rotation: Rotating crops can help prevent nutrient depletion and maintain soil health in sandy soils.
                                 Mulching: Applying mulch to the soil surface can help conserve moisture and reduce erosion in sandy soil',
        ]);


        Soil::create([
            'id'=>'3' ,
            'name'=>'Loam' ,
            'image'=>url('storage/soil/3.jpg') ,
            'Properties'=>'Loam soil is characterized by its balanced texture, containing roughly equal parts of sand, silt, and clay, along with organic matter.
                           It has good drainage and aeration due to its sand content, as well as good moisture retention and nutrient-holding capacity from its silt and clay components.
                           Loam soil is easy to work with, providing a loose, crumbly texture that allows for good root penetration and growth.',

            'Recommended_Water'=>'Water deeply but infrequently to encourage deep root growth and prevent water runoff. Aim for 1-2 inches of water per week,
                                  adjusting based on weather conditions and plant needs..' ,

            'Recommended_Fertilizers' => 'Organic fertilizers such as compost is beneficial for maintaining soil fertility and improving soil structure.
                                         Slow-release or balanced fertilizers can supplement nutrient levels as needed',

            'suitable_crops'=>'Carrots , Parsley , Tomatoes , Melons , Cucumbers ',

            'additional_notes'=>'Regular soil testing can help monitor nutrient levels and guide fertilizer applications to maintain soil fertility.
                                 Mulching the soil surface helps conserve moisture, suppress weeds, and improve soil structure over time.
                                 Rotating crops and practicing crop diversity can help prevent nutrient depletion and reduce the risk of pests and diseases.'
        ]);


        Soil::create([
            'id'=>'4' ,
            'name'=>'Chalky' ,
            'image'=>url('storage/soil/4.jpg') ,
            'Properties'=>'Chalky soil is typically light, free-draining, and contains a high proportion of calcium carbonate or lime deposits.
                           It has a pale color and may feel gritty due to the presence of calcium-rich minerals like limestone or chalk.
                           Chalky soil tends to be alkaline, with a pH level above 7.5, which can affect nutrient availability to plants.',

            'Recommended_Water'=>'it can dry out faster than other soil types, especially during hot and dry periods.
                                  It,s important to monitor soil moisture levels regularly and provide consistent watering to prevent plants from drying out. Deep watering less frequently is recommended to encourage deep root growth..' ,

            'Recommended_Fertilizers' => '1-Acid-loving plants may struggle in chalky soil due to the high pH.
                                         2-Organic amendments like compost, improve soil structure and fertility over time',

            'suitable_crops'=>'Lavender , Rosemary , Thyme , Sage , Hydrangeas  , Viburnums  ',

            'additional_notes'=>'Soil testing is crucial to understand the pH level and nutrient composition of chalky soil. This information can guide fertilizer applications and plant selection.
                                 Raised beds or containers filled with acidic soil mixes can provide a suitable growing environment for acid-loving plants in chalky soil gardens.
                                 Mulching the soil surface can help conserve moisture and moderate soil temperature fluctuations in chalky soil.',
        ]);


        Soil::create([
            'id'=>'5' ,
            'name'=>'Peat' ,
            'image'=>url('storage/soil/5.jpg') ,
            'Properties'=>'Peat soil is characterized by its dark brown to black color and spongy texture. It,s lightweight and crumbly when dry but can be dense and waterlogged when wet.
                           Peat soil is highly acidic, with a pH level typically below 5.5. The acidity can affect nutrient availability to plants, particularly alkaline-sensitive ones.
                           Due to its high organic matter content, peat soil has excellent water retention capacity but may have poor nutrient availability and aeration.',

            'Recommended_Water'=>'Peat soil retains moisture exceptionally well due to its high organic matter content. It holds water like a sponge, but it can also become waterlogged easily.
                                  Water deeply and infrequently to ensure thorough penetration and encourage deep root growth. Allow the soil surface to dry slightly between waterings.' ,

            'Recommended_Fertilizers' => '1-Acidic fertilizers to provide essential nutrients while maintaining the soil,s natural pH level
                                         2-Organic fertilizers like compost improve soil structure and increase nutrient retention over time.',

            'suitable_crops'=>' Rhododendrons , Azaleas ,  Blueberries , Cranberries , Bog plants like pitcher plants and sphagnum moss',

            'additional_notes'=>'Soil testing is essential to understand the pH level and nutrient composition of peat soil. This information can guide fertilizer applications and plant selection.
                                 Peat soil is often used as a component in potting mixes and soil amendments due to its water retention properties.
                                 To improve drainage and aeration in peat soil, consider incorporating coarse sand, perlite, or vermiculite. Avoid compacting the soil, as this can restrict root growth and water movement.',
        ]);


        Soil::create([
            'id'=>'6' ,
            'name'=>'Silty' ,
            'image'=>url('storage/soil/6.jpg') ,
            'Properties'=>'Silty soil has a smooth, flour-like texture and is easy to work with. It,s often fertile and rich in organic matter.
                           It has good water retention capabilities but drains relatively well, making it suitable for a wide range of crops.
                           Silty soil warms up quickly in the spring and is often preferred for early planting.',

            'Recommended_Water'=>'Watering should be done evenly and consistently to maintain soil moisture levels. Avoid overwatering
                                  Use mulch to help retain moisture and regulate soil temperature, especially during hot, dry periods..' ,

            'Recommended_Fertilizers' => '1-A balanced fertilizer with equal parts nitrogen (N), phosphorus (P), and potassium (K) is generally suitable for silty soil
                                         2-Organic fertilizers like compost improve soil structure and increase nutrient retention over time.',

            'suitable_crops'=>'strawberries , raspberries , oats , roses , lilies  , hostas , wheat , barley ',

            'additional_notes'=>'Soil compaction can occur with silty soil, especially when wet. Avoid working the soil when it,s too moist to prevent damage to its structure.
                                 Adding organic matter like compost or mulch can improve soil structure, fertility, and water retention over time.
                                 Regular soil testing helps monitor nutrient levels and guides fertilization practices to ensure optimal crop growth.
                                 Crop rotation can help prevent nutrient depletion and reduce the risk of pests and diseases in silty soil.',
        ]);
    }
}
