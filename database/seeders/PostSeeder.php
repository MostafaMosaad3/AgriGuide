<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'id' => '1',
            'user_id' => '1',
            'category_id' => '5',
            'title' => 'Watering Consistency:',
            'slug' => 'Maintain a consistent watering schedule for your plants',
            'body' => 'Tip: Maintain a consistent watering schedule for your plants.
                        Reasoning: Regular and consistent watering helps plants establish a healthy root system
                        , reduces stress, and promotes optimal growth.
                        Action: Water plants at the same time each day, adjusting the frequency based on factors like
                        weather conditions, soil moisture levels, and plant needs.',
            'image' => url('storage/post/1.jpg')
        ]);

        Post::create([
            'id' => '2',
            'user_id' => '1',
            'category_id' => '4',
            'title' => 'Sun Protection for Delicate Plants',
            'slug' => 'Provide shade or protection for plants that are sensitive to intense sunlight,',
            'body' => 'Tip: Provide shade or protection for plants that are sensitive to intense sunlight,
                 especially during extreme heat.
                        Reasoning: Some plants, particularly those with delicate foliage, can suffer from sunburn or
                        heat stress in intense sunlight.
                        Action: Use shade cloth, plant taller crops to provide natural shade, or strategically place
                        plants where they receive filtered sunlight during the hottest parts of the day.',
            'image' => url('storage/post/2.jpg')
        ]);

        Post::create([
            'id' => '3',
            'user_id' => '1',
            'category_id' => '3',
            'title' => 'Organic Fertilizer Use:',
            'slug' => 'Incorporate organic fertilizers to improve soil structure and enhance long-term fertility.',
            'body' => 'Tip: Incorporate organic fertilizers to improve soil structure and enhance long-term fertility.
                         Reasoning: Organic fertilizers release nutrients slowly, promoting sustainable soil health and
                          minimizing the risk of nutrient imbalances.
                          Action: Use organic materials such as compost, well-rotted manure, or organic-based
                           fertilizers to nourish the soil and provide a steady nutrient supply.',
            'image' => url('storage/post/3.jpg')
        ]);

        Post::create([
            'id' => '4',
            'user_id' => '2',
            'category_id' => '5',
            'title' => 'Deep Root Watering',
            'slug' => 'Water deeply to encourage deep root growth.',
            'body' => 'Tip: Water deeply to encourage deep root growth.
                        Reasoning: Shallow watering may lead to shallow root systems, making plants more susceptible to
                         drought and stress. Deep root watering encourages roots to reach deeper into the soil for
                         better access to moisture.
                        Action: Apply water slowly and deeply, ensuring the soil around the roots is thoroughly
                         moistened. This promotes strong, drought-resistant plants.',
            'image' => url('storage/post/4.jpg')
        ]);

        Post::create([
            'id' => '5',
            'user_id' => '2',
            'category_id' => '3',
            'title' => 'Balanced Nutrient Application:',
            'slug' => 'Apply fertilizers with a balanced ratio of essential nutrients for overall plant health.',
            'body' => 'Tip: Apply fertilizers with a balanced ratio of essential nutrients for overall plant health.
                        Reasoning: Providing a mix of nitrogen, phosphorus, and potassium, along with secondary and
                         micronutrients, supports robust growth, flowering, and fruiting.
                        Action: Choose fertilizers with a balanced NPK ratio and consider soil test results for more
                         targeted application.',
            'image' => url('storage/post/5.jpg')
        ]);

        Post::create([
            'id' => '6',
            'user_id' => '2',
            'category_id' => '4',
            'title' => 'Sunlight Assessment:',
            'slug' => 'Understand the sunlight requirements of each crop and plant them accordingly.',
            'body' => 'Tip: Understand the sunlight requirements of each crop and plant them accordingly.
                        - Reasoning: Proper exposure to sunlight is crucial for photosynthesis and overall plant growth.
                         Different crops have varying sunlight needs.
                        - Action: Evaluate your gardens sunlight patterns and group plants based on their sun
                         requirements to optimize growth conditions.',
            'image' => url('storage/post/6.jpg')
        ]);

        Post::create([
            'id' => '7',
            'user_id' => '3',
            'category_id' => '5',
            'title' => 'Watering Schedule:',
            'slug' => 'Establish a consistent watering schedule based on plant needs and environmental conditions.',
            'body' => 'Tip: Establish a consistent watering schedule based on plant needs and environmental conditions.
                        - Reasoning: Consistent watering helps prevent stress, supports nutrient uptake, and encourages
                         healthy root development.
                        - Action: Water early in the day, when temperatures are cooler, to minimize evaporation.
                         Adjust watering frequency based on weather conditions and plant requirements.',
            'image' => url('storage/post/7.jpg')
        ]);

        Post::create([
            'id' => '8',
            'user_id' => '3',
            'category_id' => '4',
            'title' => 'Proper Sun Exposure:',
            'slug' => 'Place plants in locations that match their sunlight requirements.',
            'body' => 'Tip: Place plants in locations that match their sunlight requirements.
                        Reasoning: Sunlight is crucial for photosynthesis, the process by which plants convert light
                        into energy. Providing the right amount of sunlight enhances plant growth and productivity.
                        Action: Know the sunlight preferences of your crops and position them accordingly—full sun
                         for sun-loving plants, partial shade for those that thrive in less light.',
            'image' => url('storage/post/8.jpg')
        ]);

        Post::create([
            'id' => '9',
            'user_id' => '3',
            'category_id' => '2',
            'title' => 'Proper Spacing:',
            'slug' => 'Follow recommended spacing guidelines for each crop to prevent competition for resources.',
            'body' => 'Tip: Follow recommended spacing guidelines for each crop to prevent competition for resources.
                        Reasoning: Proper spacing ensures adequate sunlight, air circulation, and nutrient availability
                         for each plant, promoting optimal growth.
                        Action: Refer to planting guides or seed packets for recommended spacing, adjusting as needed
                         for specific varieties. ',
            'image' => url('storage/post/9.jpg')
        ]);

        Post::create([
            'id' => '10',
            'user_id' => '4',
            'category_id' => '2',
            'title' => 'Timely Harvesting:',
            'slug' => 'Harvest crops at their peak maturity to maximize flavor, nutritional content, and yield.',
            'body' => 'Tip: Harvest crops at their peak maturity to maximize flavor, nutritional content, and yield.
                        Reasoning: Delayed or premature harvesting can affect taste and nutritional quality,
                         while timely harvesting encourages continuous production.
                        Action: Monitor crops regularly, noting their expected harvest times, and harvest when fruits,
                         vegetables, or grains are at their prime. ',
            'image' => url('storage/post/10.jpg')
        ]);

        Post::create([
            'id' => '11',
            'user_id' => '4',
            'category_id' => '1',
            'title' => 'Soil Structure Improvement:',
            'slug' => 'Incorporate organic matter like compost or cover crops to enhance soil structure.',
            'body' => 'Tip: Incorporate organic matter like compost or cover crops to enhance soil structure.
                        Reasoning: Improved soil structure promotes aeration, water drainage, and root penetration,
                        fostering healthier plant growth.
                        Action: Regularly add organic amendments to maintain and build soil structure,
                         preventing compaction. ',
            'image' => url('storage/post/11.jpg')
        ]);

        Post::create([
            'id' => '12',
            'user_id' => '4',
            'category_id' => '1',
            'title' => 'Mulching for Moisture Retention:',
            'slug' => 'Apply a layer of organic mulch around plants to conserve soil moisture.',
            'body' => 'Tip: Apply a layer of organic mulch around plants to conserve soil moisture.
                        Reasoning: Mulching helps reduce evaporation, suppress weeds, and regulate soil temperature,
                         ensuring consistent moisture levels.
                        Action: Use materials like straw, wood chips, or compost as mulch to retain soil moisture and
                        promote a favorable environment for plant roots. ',
            'image' => url('storage/post/12.jpg')
        ]);

        Post::create([
            'id' => '13',
            'user_id' => '5',
            'category_id' => '2',
            'title' => 'Companion Planting:',
            'slug' => 'Utilize companion planting to enhance crop health, deter pests, and improve yields.',
            'body' => 'Tip: Utilize companion planting to enhance crop health, deter pests, and improve yields.
                        Reasoning: Certain plant combinations have synergistic effects, providing natural pest control,
                         improved nutrient uptake, and overall mutual benefits.
                        Action: Research and implement companion planting strategies based
                        on the compatibility of different crops. ',
            'image' => url('storage/post/13.jpg')
        ]);

        Post::create([
            'id' => '14',
            'user_id' => '5',
            'category_id' => '1',
            'title' => 'Soil Testing and pH Adjustment:',
            'slug' => 'Regularly conduct soil tests to assess nutrient levels and pH..',
            'body' => 'Tip: Regularly conduct soil tests to assess nutrient levels and pH.
                        Reasoning: Understanding your soils characteristics allows you to make informed decisions
                         about nutrient amendments. Adjust soil pH using lime or sulfur based on test results.
                        Action: Amend the soil with organic matter and adjust pH as needed to create an optimal
                         growing environment for crops. ',
            'image' => url('storage/post/14.jpg')
        ]);

        Post::create([
            'id' => '15',
            'user_id' => '5',
            'category_id' => '3',
            'title' => 'Timing and Frequency of Fertilizer Application:',
            'slug' => 'Apply fertilizers at the right time and frequency according to plant growth stages.',
            'body' => 'Tip: Apply fertilizers at the right time and frequency according to plant growth stages.
                        Reasoning: Timing is crucial for efficient nutrient uptake. Applying fertilizers too early
                        or too late in the growing season may result in nutrient imbalances or deficiencies.
                        Action: Follow recommended guidelines for fertilizing specific crops. Consider split
                         applications during the growing season to provide a continuous supply of nutrients
                          without risking over-fertilization. ',
            'image' => url('storage/post/15.jpg')
        ]);
    }
}
