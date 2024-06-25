<?php

namespace Database\Seeders;

use App\Models\Crop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Crop::create([
            'id'=>'1' ,
            'name'=>'Potatoes' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/1.jpg') ,
            'Recommended Time'=>'Potatoes are typically planted in early spring , when the soil is workable and not too wet',
            'Planting Method'=>' Cut the seed potatoes into pieces, Plant the pieces about 3-4 inches deep in rows,spaced about 12-15 inches apart, with 2-3 feet between rows.',
            'Moisture'=>'82.00' ,
            'water requirement'=>' Aim to provide about 1-2 inches of water per week, either through rainfall or irrigation.',
            'Irrigation Method'=>'drip irrigation or soaker hoses. These methods deliver water directly to the soil, minimizing water waste',
            'Fertilizers'=>'balanced fertilizer with a higher potassium content',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting potatoes.Before planting, prepare the soil by adding organic matter such as compost or aged manure to improve soil fertility and structure.When cutting seed potatoes, ensure that each piece has at least one eye or sprout to promote healthy growth.Hill soil around the base of the potato plants when they reach about 6-8 inches tall.'
        ]);

        Crop::create([
            'id'=>'2' ,
            'name'=>'sweet corn' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/2.jpg') ,
            'Recommended Time'=>' planting in late spring or early summer.',
            'Planting Method'=>'Plant seeds about 1 inch deep and 9-12 inches apart in rows spaced 2-3 feet apart. ',
            'Moisture'=>'80.00' ,
            'water requirement'=>'Aim to provide 1-1.5 inches of water per week, either through rainfall or irrigation.',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are preferred for sweet corn to avoid wetting the foliage excessively',
            'Fertilizers'=>' balanced fertilizer with a higher nitrogen content',
            'Planting Tips'=>'Plant sweet corn in a sunny location with well-draining soil that has been amended with compost or organic matter.Plant corn in blocks rather than single rows to ensure good pollination.Thin seedlings to ensure proper spacing, and weed regularly to reduce competition for nutrients and water.Consider planting early, mid, and late-season varieties to extend your harvest period.'
        ]);

        Crop::create([
            'id'=>'3' ,
            'name'=>'green beans' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/3.jpg') ,
            'Recommended Time'=>'should be planted after the last frost date in your area.',
            'Planting Method'=>'Plant seeds about 1 inch deep and 2-4 inches apart in rows spaced 18-24 inches apart',
            'water requirement'=>' Aim to provide 1-1.5 inches of water per week, either through rainfall or irrigation.',
            'Moisture'=>'82.00' ,
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for green beans',
            'Fertilizers'=>'don,t require heavy fertilization. Incorporate a balanced fertilizer',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting green beans.Plant bush varieties for smaller spaces or container gardening, and pole varieties for vertical growth and higher yields.Provide support for pole beans with trellises, stakes, or teepees to keep the plants upright and facilitate harvesting.'
        ]);

        Crop::create([
            'id'=>'4' ,
            'name'=>'peppers' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/4.jpg') ,
            'Recommended Time'=>'should be planted after the last frost date in your area.',
            'Planting Method'=>'can be started from seeds indoors about 8-10 weeks before the last frost date and transplanted outdoors after the danger of frost has passed.',
            'water requirement'=>'Provide about 1-2 inches of water per week, either through rainfall or irrigation',
            'Moisture'=>'80.00' ,
            'Irrigation Method'=>' Drip irrigation or soaker hoses are ideal for peppers',
            'Fertilizers'=>'balanced fertilizer with a higher phosphorus content',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting peppers.Space pepper plants about 18-24 inches apart in rows spaced 24-36 inches apart, depending on the variety,s size.Provide support for tall or heavy-bearing pepper varieties with stakes or cages to prevent the plants from bending or breaking under the weight of the fruit.'
        ]);

        Crop::create([
            'id'=>'5' ,
            'name'=>'watermelons' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/5.jpg') ,
            'Recommended Time'=>'should be planted after the last frost date in your area typically in late spring or early summer.',
            'Planting Method'=>' planted from seeds directly into the garden soil. Plant seeds about 1 inch deep in hills or rows spaced 6-8 feet apart. ',
            'water requirement'=>' Provide about 1-2 inches of water per week, either through rainfall or irrigation',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering watermelons, ',
            'Moisture'=>'81.00' ,
            'Fertilizers'=>' balanced fertilizer with a higher potassium content',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting watermelons.Plant watermelon seeds in hills or rows, spacing them about 2-3 feet apart within the row and allowing 6-8 feet between rows.Provide support for growing watermelons, such as trellises or slings, to support the weight of the fruit and prevent rotting.'
        ]);

        Crop::create([
            'id'=>'6' ,
            'name'=>'sunflowers' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/6.jpg') ,
            'Recommended Time'=>'after the last frost date in your area when the soil has warmed',
            'Planting Method'=>' can be directly seeded into the garden soil or started indoors and transplanted outdoors once the danger of frost has passed',
            'water requirement'=>'drought-tolerant once established but benefit from regular watering during dry periods',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering sunflowers',
            'Moisture'=>'83.00' ,
            'Fertilizers'=>' Sunflowers are not heavy feeders and can thrive in average soil without additional fertilization',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting sunflowers.Plant sunflower seeds in rows or groups, spacing them according to the variety,s mature size.Provide support for tall varieties of sunflowers with stakes or trellises to prevent them from toppling over in windy conditions.'
        ]);

        Crop::create([
            'id'=>'7' ,
            'name'=>'Lettuce' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/7.jpg') ,
            'Recommended Time'=>'can be planted as soon as the soil can be worked in early spring. It can also be planted in late summer for a fall harvest.',
            'Planting Method'=>'can be directly seeded into the garden soil or started indoors and transplanted outdoors',
            'water requirement'=>'Lettuce prefers consistently moist soil but not waterlogged. ',
            'Irrigation Method'=>' Drip irrigation or soaker hoses are ideal for watering lettuce,',
            'Fertilizers'=>' Incorporate a balanced fertilizer into the soil before planting',
            'Moisture'=>'82.00' ,
            'Planting Tips'=>'Choose a location with partial shade for planting lettuce in hot climates, as it prefers cooler temperatures.Plant lettuce seeds shallowly and keep the soil consistently moist until germination occurs.Succession plant lettuce every 2-3 weeks for a continuous harvest throughout the growing season'
        ]);

        Crop::create([
            'id'=>'8' ,
            'name'=>'Radishes' ,
            'soil_id'=>'1' ,
            'image'=>url('storage/crop/8.jpg') ,
            'Recommended Time'=>'They can also be planted in late summer for a fall harvest.',
            'Planting Method'=>'directly seeded into the garden soil. Plant seeds about 1/2 inch deep and 1 inch apart in rows spaced 6-12 inches apart',
            'water requirement'=>'Radishes prefer consistently moist soil but not waterlogged',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering radishes',
            'Moisture'=>'82.00' ,
            'Fertilizers'=>'Radishes are not heavy feeders and can thrive in average soil without additional fertilization',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting radishes.Plant radish seeds shallowly and keep the soil consistently moist until germination occurs.Succession plant radishes every 2-3 weeks for a continuous harvest throughout the growing season.'
        ]);

        Crop::create([
            'id'=>'9' ,
            'name'=>'squash',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/9.jpg') ,
            'Recommended Time'=>'They should be planted after the last frost date in your area when the soil has warmed',
            'Planting Method'=>'Squash seeds can be directly sown into the garden soil or started indoors 3-4 weeks before the last frost date ',
            'water requirement'=>'Provide about 1-2 inches of water per week, either through rainfall or irrigation. ',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering squash',
            'Fertilizers'=>'balanced fertilizer with a higher phosphorus content',
            'Moisture'=>'83.00' ,
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting squash.Plant squash seeds in hills or rows, spacing them according to the variety,s mature size.Provide support for vining varieties of squash with trellises or cages to keep the fruit off the ground and prevent rotting.'
        ]);

        Crop::create([
            'id'=>'10' ,
            'name'=>'kale',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/10.jpg') ,
            'Recommended Time'=>'can be planted in early spring for a spring harvest or in late summer for a fall harvest.',
            'Planting Method'=>'can be directly sown into the garden soil or started indoors 4-6 weeks before the last frost date ',
            'water requirement'=>' Provide about 1 inch of water per week, either through rainfall or irrigation',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering kale',
            'Fertilizers'=>'can thrive in average soil without additional fertilization',
            'Moisture'=>'84.00' ,
            'Planting Tips'=>'Choose a sunny to partially shaded location with well-draining soil for planting kale.Plant kale seeds shallowly and keep the soil consistently moist until germination occurs.Succession plant kale every 2-3 weeks for a continuous harvest throughout the growing season.'
        ]);

        Crop::create([
            'id'=>'11' ,
            'name'=>'spinach',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/11.jpg') ,
            'Recommended Time'=>'should be planted in early spring for a spring harvest or in late summer for a fall harvest.',
            'Planting Method'=>'can be directly sown into the garden soil or started indoors 4-6 weeks before the last frost date',
            'water requirement'=>'Provide about 1 inch of water per week, either through rainfall or irrigation',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering spinach',
            'Fertilizers'=>' can thrive in average soil without additional fertilization',
            'Moisture'=>'85.00' ,
            'Planting Tips'=>'Choose a partially shaded location with well-draining soil for planting spinach, especially in warmer climates.Plant spinach seeds shallowly and keep the soil consistently moist until germination occurs.Succession plant spinach every 2-3 weeks for a continuous harvest throughout the growing season.'
        ]);

        Crop::create([
            'id'=>'12' ,
            'name'=>'apples',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/12.jpg') ,
            'Recommended Time'=>'planted in late winter to early spring while they are still dormant.',
            'Planting Method'=>' planted as dormant bare-root or container-grown trees.Dig a hole wide enough and deep enough to accommodate the roots without bending or crowding',
            'water requirement'=>'Provide about 1-2 inches of water per week, either through rainfall or irrigation, especially during dry periods.',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for apples',
            'Moisture'=>'86.00' ,
            'Fertilizers'=>'Apply a balanced fertilizer with a higher nitrogen content in early spring before new growth begins',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting fruit trees.Plant trees on a slight mound or raised bed to improve drainage and prevent waterlogging.Mulch around the base of fruit trees to conserve moisture, suppress weeds, and regulate soil temperature.'
        ]);

        Crop::create([
            'id'=>'13' ,
            'name'=>'Pears',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/13.jpg') ,
            'Recommended Time'=>'planted in late winter to early spring while they are still dormant.',
            'Planting Method'=>' planted as dormant bare-root or container-grown trees.Dig a hole wide enough and deep enough to accommodate the roots without bending or crowding',
            'water requirement'=>'Provide about 1-2 inches of water per week, either through rainfall or irrigation, especially during dry periods.',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for Pears',
            'Moisture'=>'80.00' ,
            'Fertilizers'=>'Apply a balanced fertilizer with a higher nitrogen content in early spring before new growth begins',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting fruit trees.Plant trees on a slight mound or raised bed to improve drainage and prevent waterlogging.Mulch around the base of fruit trees to conserve moisture, suppress weeds, and regulate soil temperature.'
        ]);

        Crop::create([
            'id'=>'14' ,
            'name'=>'Plums',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/14.jpg') ,
            'Recommended Time'=>'planted in late winter to early spring while they are still dormant.',
            'Planting Method'=>' planted as dormant bare-root or container-grown trees.Dig a hole wide enough and deep enough to accommodate the roots without bending or crowding',
            'water requirement'=>'Provide about 1-2 inches of water per week, either through rainfall or irrigation, especially during dry periods.',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for Plums',
            'Moisture'=>'78.00' ,
            'Fertilizers'=>'Apply a balanced fertilizer with a higher nitrogen content in early spring before new growth begins',
            'Planting Tips'=>'Choose a sunny location with well-draining soil for planting fruit trees.Plant trees on a slight mound or raised bed to improve drainage and prevent waterlogging.Mulch around the base of fruit trees to conserve moisture, suppress weeds, and regulate soil temperature.'
        ]);

        Crop::create([
            'id'=>'15' ,
            'name'=>'Cabbage',
            'soil_id'=>'2' ,
            'image'=>url('storage/crop/15.jpg') ,
            'Recommended Time'=>' can be planted in early spring for a spring harvest or in late summer for a fall harvest',
            'Planting Method'=>'can be directly sown into the garden soil or started indoors 4-6 weeks before the last frost date ',
            'water requirement'=>'Provide about 1 inch of water per week, either through rainfall or irrigation.',
            'Irrigation Method'=>' Drip irrigation or soaker hoses are ideal for watering cabbage',
            'Fertilizers'=>'balanced fertilizer with a higher nitrogen content',
            'Moisture'=>'79.00' ,
            'Planting Tips'=>'Choose a sunny to partially shaded location with well-draining soil for planting cabbage.Plant cabbage seeds shallowly and keep the soil consistently moist until germination occurs.Succession plant cabbage every 2-3 weeks for a continuous harvest throughout the growing season'
        ]);

        Crop::create([
            'id'=>'16' ,
            'name'=>'Carrot',
            'soil_id'=>'3' ,
            'image'=>url('storage/crop/1.jpg') ,
            'Recommended Time'=>'early spring for a summer harvest or in late summer for a fall harvest.',
            'Planting Method'=>'Carrots are best grown from seeds directly sown into the garden soil. ,Sow carrot seeds thinly,about 1/4 inch deep and 1 inch apart in rows spaced 12-18 inches apart.',
            'water requirement'=>'Aim to provide about 1 inch of water per week, adjusting based on weather conditions',
            'Irrigation Method'=>'Drip irrigation or soaker hoses are ideal for watering carrots as they deliver water directly to the root zone',
            'Fertilizers'=>'incorporate compost or well-rotted manure into the soil to improve fertility.Avoid using high-nitrogen fertilizers',
            'Moisture'=>'80.00' ,
            'Planting Tips'=>'Mulch around carrot plants to conserve moisture, suppress weeds, and prevent soil crusting.Keep the planting area free from weeds, as competition can hinder carrot growth.Consider planting companion plants such as onions, leeks, or radishes to deter pests and maximize garden space'
        ]);

        Crop::create([
            'id'=>'17' ,
            'name'=>'Parsley',
            'soil_id'=>'3' ,
            'image'=>url('storage/crop/17.jpg') ,
            'Recommended Time'=>'Plant parsley in early spring or late summer to early fall.',
            'Planting Method'=>'Directly sow parsley seeds into well-drained soil, about 1/4 inch deep.Space seeds or seedlings 6 to 8 inches apart in rows spaced 12 to 18 inches apart.',
            'water requirement'=>'Keep the soil consistently moist but not waterlogged ,Water parsley plants regularly, especially during dry periods.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to deliver water directly to the root zone.',
            'Fertilizers'=>'Parsley is a light feeder and does not require heavy fertilization.Incorporate organic compost into the soil before planting for added nutrients.',
            'Moisture'=>'81.00' ,
            'Planting Tips'=>'Parsley seeds can take several weeks to germinate, so be patient.Harvest outer leaves as needed to encourage continuous growth.Mulch around parsley plants to retain moisture and suppress weeds.'
        ]);

        Crop::create([
            'id'=>'18' ,
            'name'=>'Tomatoes',
            'soil_id'=>'3' ,
            'image'=>url('storage/crop/18.jpg') ,
            'Recommended Time'=>'after the last frost date in spring و in warm weather and require full sun.',
            'Planting Method'=>'Dig planting holes about 2 feet apart in rows spaced 3 to 4 feet apart.Plant tomato transplants deep, burying the stem up to the first set of leaves.',
            'water requirement'=>'Water deeply and regularly, aiming to keep the soil evenly moist but not waterlogged.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water tomatoes at the base.',
            'Moisture'=>'82.00' ,
            'Fertilizers'=>'Before planting, amend the soil with compost or well-rotted manure to provide essential nutrients.',
            'Planting Tips'=>'Provide support for tomato plants with stakes, cages, or trellises to prevent sprawling.Prune tomato plants to improve air circulation and reduce disease risk.Mulch around tomato plants to conserve moisture and suppress weeds.'
        ]);

        Crop::create([
            'id'=>'19' ,
            'name'=>'Melons',
            'soil_id'=>'3' ,
            'image'=>url('storage/crop/19.jpg') ,
            'Recommended Time'=>'Plant melons in late spring or early summer after the danger of frost has passed.',
            'Planting Method'=>'Space plants 2 to 3 feet apart in rows spaced 4 to 6 feet apart.',
            'water requirement'=>'Water deeply and regularly, keeping the soil evenly moist but not waterlogged.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water melons at the base.',
            'Fertilizers'=>'Amend the soil with compost or well-rotted manure before planting.',
            'Moisture'=>'83.00' ,
            'Planting Tips'=>'Provide support for melon vines with trellises or slings to prevent fruit from touching the ground.Mulch around melon plants to conserve moisture, suppress weeds, and keep fruits clean.'
        ]);


        Crop::create([
            'id'=>'20' ,
            'name'=>'Cucumbers',
            'soil_id'=>'3' ,
            'image'=>url('storage/crop/20.jpg') ,
            'Recommended Time'=>'Plant cucumbers in late spring after the last frost date و Cucumbers require warm weather and full sun.',
            'Planting Method'=>'Directly sow cucumber seeds or transplant seedlings into well-drained soil.',
            'water requirement'=>'Water deeply and regularly, keeping the soil evenly moist but not waterlogged',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water cucumbers at the base.',
            'Fertilizers'=>'Amend the soil with compost or well-rotted manure before planting.',
            'Moisture'=>'84.00' ,
            'Planting Tips'=>'Provide support for cucumber vines with trellises or cages to save space and keep fruits off the ground.Harvest cucumbers regularly to encourage continuous fruiting.Mulch around cucumber plants to conserve moisture, suppress weeds, and keep fruits clean.'
        ]);

        Crop::create([
            'id'=>'21' ,
            'name'=>'lavender',
            'soil_id'=>'4' ,
            'image'=>url('storage/crop/21.jpg') ,
            'Recommended Time'=>'Plant lavender in early spring or early fall when the soil is warm and temperatures are moderate.',
            'Planting Method'=>'Space lavender plants 12 to 18 inches apart in rows spaced 24 to 36 inches apart.',
            'water requirement'=>'Water deeply and infrequently, allowing the soil to dry out between waterings.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water lavender at the base.',
            'Fertilizers'=>'Amend the soil with gravel or sand for better drainage rather than adding fertilizers.',
            'Moisture'=>'88.00' ,
            'Planting Tips'=>'Plant lavender in raised beds or containers to improve drainage in heavy soil.Prune lavender plants lightly after flowering to promote bushier growth and prevent legginess.Mulch around lavender plants with gravel or crushed stone to suppress weeds and retain moisture.'
        ]);

        Crop::create([
            'id'=>'22' ,
            'name'=>'Rosemary',
            'soil_id'=>'4' ,
            'image'=>url('storage/crop/22.jpg') ,
            'Recommended Time'=>'Rosemary prefers well-drained soil and full sun.',
            'Planting Method'=>'Space rosemary plants 24 to 36 inches apart in rows spaced 36 to 48 inches apart',
            'water requirement'=>'Water young plants regularly to establish roots, then reduce watering once established.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water Rosemary at the base.',
            'Fertilizers'=>'Amend the soil with compost or well-rotted manure before planting.',
            'Moisture'=>'87.00' ,
            'Planting Tips'=>'Plant rosemary in containers or raised beds if you have heavy or poorly drained soil.Prune rosemary regularly to maintain its shape and promote bushy growth.Harvest rosemary sprigs as needed, but avoid removing more than one-third of the plants growth at once.'
        ]);

        Crop::create([
            'id'=>'23' ,
            'name'=>'Thyme',
            'soil_id'=>'4' ,
            'image'=>url('storage/crop/23.jpg') ,
            'Recommended Time'=>'Plant thyme in early spring after the last frost date or in early fall.',
            'Planting Method'=>'Space thyme plants 6 to 12 inches apart in rows spaced 12 to 18 inches apart.',
            'water requirement'=>'Water young plants regularly to establish roots, then reduce watering once established.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water Thyme at the base.',
            'Fertilizers'=>'Amend the soil with compost or well-rotted manure before planting.',
            'Moisture'=>'89.00' ,
            'Planting Tips'=>'Plant thyme in containers or raised beds if you have heavy or poorly drained soil.Prune thyme regularly to maintain its shape and promote bushy growth.Harvest thyme sprigs as needed, but avoid removing more than one-third of the plant,s growth at once.'
        ]);

        Crop::create([
            'id'=>'24' ,
            'name'=>'Sage',
            'soil_id'=>'4' ,
            'image'=>url('storage/crop/24.jpg') ,
            'Recommended Time'=>'Plant sage in early spring after the last frost date.',
            'Moisture'=>'80.00' ,
            'Planting Method'=>'Space sage plants 18 to 24 inches apart in rows spaced 24 to 36 inches apart.',
            'water requirement'=>'Water deeply and regularly, keeping the soil evenly moist but not waterlogged',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water Sage at the base.',
            'Fertilizers'=>'Amend the soil with compost or well-rotted manure before planting.',
            'Planting Tips'=>'Plant sage in containers or raised beds if you have heavy or poorly drained soil. Prune sage regularly to maintain its shape and promote bushy growth.Harvest sage leaves as needed, but avoid removing more than one-third of the plant,s growth at once.'
        ]);

        Crop::create([
            'id'=>'25' ,
            'name'=>'Hydrangeas',
            'soil_id'=>'4' ,
            'image'=>url('storage/crop/25.jpg') ,
            'Moisture'=>'81.00' ,
            'Recommended Time'=>'Plant hydrangeas in early spring or early fall when the soil is moist and temperatures are moderate.',
            'Planting Method'=>'Plant hydrangeas in well-drained soil with a pH of 5.5 to 6.5.',
            'water requirement'=>'Hydrangeas require regular watering, especially during the first growing season.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water Hydrangeas at the base.',
            'Fertilizers'=>'Fertilize hydrangeas in spring with a balanced fertilizer (e.g., 10-10-10) or a fertilizer specifically formulated for acid-loving plants.',
            'Planting Tips'=>'Plant hydrangeas in locations with morning sun and afternoon shade to protect them from hot afternoon sun.Mulch around hydrangea plants to conserve moisture, suppress weeds, and maintain even soil temperature.'
        ]);

        Crop::create([
            'id'=>'26' ,
            'name'=>'viburnums',
            'soil_id'=>'4' ,
            'image'=>url('storage/crop/26.jpg') ,
            'Moisture'=>'82.00' ,
            'Recommended Time'=>'Plant viburnums in early spring or early fall when the soil is moist and temperatures are moderate',
            'Planting Method'=>'Plant hydrangeas in well-drained soil with a pH of 5.5 to 6.5.',
            'water requirement'=>'Water newly planted viburnums regularly to establish roots, then reduce watering once established.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water viburnums at the base.',
            'Fertilizers'=>'Fertilize viburnums in spring with a slow-release fertilizer or a balanced fertilizer (e.g., 10-10-10).',
            'Planting Tips'=>'Choose viburnum varieties suited to your specific climate and soil conditions.Prune viburnums selectively to maintain their natural shape and promote flowering.Mulch around viburnum plants to conserve moisture, suppress weeds, and maintain even soil temperature..'
        ]);

        Crop::create([
            'id'=>'27' ,
            'name'=>'rhododendrons',
            'soil_id'=>'5' ,
            'image'=>url('storage/crop/27.jpg') ,
            'Recommended Time'=>'Plant rhododendrons in early spring or early fall when the soil is moist and temperatures are moderate.',
            'Planting Method'=>'Plant rhododendrons at the same level as they were growing in the container and backfill with soil.',
            'Moisture'=>'83.00' ,
            'water requirement'=>'Water deeply and infrequently to encourage deep root growth.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water rhododendrons at the base.',
            'Fertilizers'=>'Fertilize rhododendrons with a slow-release, acid-forming fertilizer in spring after flowering.',
            'Planting Tips'=>'Mulch around rhododendron plants with pine bark or shredded leaves to conserve moisture and suppress weeds.Prune rhododendrons after flowering to remove spent blooms and shape the plant..'
        ]);

        Crop::create([
            'id'=>'28' ,
            'name'=>'Hydrangeas',
            'soil_id'=>'5' ,
            'image'=>url('storage/crop/28.jpg') ,
            'Recommended Time'=>'Plant azaleas in early spring or early fall when the soil is moist and temperatures are moderate.',
            'Planting Method'=>'Amend the soil with organic matter such as compost or peat moss to improve drainage and acidity.',
            'Moisture'=>'84.00' ,
            'water requirement'=>'Azaleas require regular watering, especially during dry periods.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water azaleas at the base.',
            'Fertilizers'=>'Fertilize azaleas with a slow-release, acid-forming fertilizer in spring after flowering.',
            'Planting Tips'=>'Mulch around azalea plants with pine bark or shredded leaves to conserve moisture and suppress weeds.rune azaleas after flowering to remove spent blooms and shape the plant'
        ]);

        Crop::create([
            'id'=>'29' ,
            'name'=>'Blueberries',
            'soil_id'=>'5' ,
            'image'=>url('storage/crop/29.jpg') ,
            'Recommended Time'=>'Plant blueberries in early spring or early fall when the soil is moist and temperatures are moderate.',
            'Planting Method'=>'Amend the soil with organic matter such as compost or peat moss to improve drainage and acidity.',
            'Moisture'=>'85.00' ,
            'water requirement'=>'Blueberries require regular watering, especially during dry periods..',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water blueberries at the base.',
            'Fertilizers'=>'Fertilize blueberries with a slow-release, acid-forming fertilizer in spring before new growth begins.',
            'Planting Tips'=>'Mulch around blueberry plants with pine bark or sawdust to conserve moisture and suppress weeds.Prune blueberry bushes annually to remove old wood and stimulate new growth..'
        ]);

        Crop::create([
            'id'=>'30' ,
            'name'=>'Cranberries',
            'soil_id'=>'5' ,
            'image'=>url('storage/crop/30.jpg') ,
            'Recommended Time'=>'Plant cranberries in spring or early summer when soil temperatures are above freezing.',
            'Planting Method'=>'Cranberries are typically grown in flooded bogs or in raised beds with acidic, sandy soil',
            'Moisture'=>'86.00' ,
            'water requirement'=>'Cranberries require consistent moisture, especially during flowering and fruit development.',
            'Irrigation Method'=>'In flooded bogs, use irrigation systems to maintain water levels and provide frost protection.',
            'Fertilizers'=>'Use fertilizers specifically formulated for cranberries or acid-loving plants, applied according ',
            'Planting Tips'=>'Choose cranberry varieties suited to your climate and soil conditions.Monitor water levels closely to prevent drought stress or waterlogging.Harvest cranberries when they reach full color and firmness, typically in the fall'
        ]);

        Crop::create([
            'id'=>'31' ,
            'name'=>'pitcher plant',
            'soil_id'=>'5' ,
            'image'=>url('storage/crop/31.jpg') ,
            'Recommended Time'=>'Plant pitcher plants in early spring or early fall when temperatures are moderate.',
            'Moisture'=>'87.00' ,
            'Planting Method'=>'Pitcher plants are typically grown in bog gardens or containers filled with acidic, sandy soil.',
            'water requirement'=>'Pitcher plants require consistently moist soil, similar to their natural habitat in bogs and wetlands.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water pitcher plants at the base.',
            'Fertilizers'=>'Pitcher plants are carnivorous and obtain nutrients from insects rather than fertilizers.',
            'Planting Tips'=>'Plant pitcher plants in locations with full sun to partial shade and high Moisture.Avoid disturbing the delicate roots of pitcher plants during planting or transplanting.Remove dead or dying pitchers regularly to maintain plant health and appearance.'
        ]);


        Crop::create([
            'id'=>'32' ,
            'name'=>'strawberries',
            'soil_id'=>'6' ,
            'image'=>url('storage/crop/32.jpg') ,
            'Recommended Time'=>'Plant pitcher plants in early spring or early fall when temperatures are moderate.',
            'Planting Method'=>'Pitcher plants are typically grown in bog gardens or containers filled with acidic, sandy soil.',
            'Moisture'=>'88.00' ,
            'water requirement'=>'Pitcher plants require consistently moist soil, similar to their natural habitat in bogs and wetlands.',
            'Irrigation Method'=>'Use drip irrigation or soaker hoses to water pitcher plants at the base.',
            'Fertilizers'=>'Pitcher plants are carnivorous and obtain nutrients from insects rather than fertilizers.',
            'Planting Tips'=>'Plant pitcher plants in locations with full sun to partial shade and high Moisture.Avoid disturbing the delicate roots of pitcher plants during planting or transplanting.Remove dead or dying pitchers regularly to maintain plant health and appearance.'
        ]);

        Crop::create([
            'id' => '33',
            'name' => 'mint',
            'soil_id' => '2',
            'image' => url('storage/crop/33.jpg'),
            'Recommended Time' => 'Mint can be planted in the spring or fall, but it is best to plant after the last frost in spring.',
            'Planting Method' => 'Plant mint seedlings or cuttings 18-24 inches apart in moist, well-draining soil. Mint can also be grown in containers to prevent it from spreading.',
            'water requirement' => 'Keep the soil consistently moist but not waterlogged. Mint requires about 1-2 inches of water per week.',
            'Moisture' => '75.00',
            'Irrigation Method' => 'Drip irrigation or hand watering is suitable for mint to maintain consistent moisture levels.',
            'Fertilizers' => 'Mint does not require heavy fertilization. Use a balanced, all-purpose fertilizer sparingly if the growth is slow.',
            'Planting Tips' => 'Mint prefers partial to full sunlight and thrives in rich, moist soil. To control its invasive nature, consider planting mint in containers or using barriers to keep it from spreading. Regularly trim the mint to encourage bushy growth and prevent flowering, which can lead to a stronger flavor.'
        ]);

        Crop::create([
            'id' => '34',
            'name' => 'rice',
            'soil_id' => '3',
            'image' => url('storage/crop/35.jpg'),
            'Recommended Time' => 'Rice should be planted in early spring, after the last frost, when the soil has warmed up.',
            'Planting Method' => 'Start seeds indoors and transplant seedlings 6 inches apart in a flooded paddy or direct sow in wet soil.',
            'water requirement' => 'Rice requires a lot of water; keep the fields flooded with 2-3 inches of water during the growing season.',
            'Moisture' => '90.00',
            'Irrigation Method' => 'Flood irrigation is most common for rice to maintain standing water in the fields.',
            'Fertilizers' => 'Apply nitrogen-rich fertilizers at different stages of growth to ensure healthy development.',
            'Planting Tips' => 'Choose a sunny location and use heavy, clayey soil that retains water well. Ensure the field can be kept flooded for most of the growing period. Drain the field a few weeks before harvest to allow the rice to dry.'
        ]);

        Crop::create([
            'id' => '35',
            'name' => 'wheat',
            'soil_id' => '4',
            'image' => url('storage/crop/33.jpg'),
            'Recommended Time' => 'Plant wheat in the fall for winter wheat or in early spring for spring wheat.',
            'Planting Method' => 'Direct sow seeds 1-2 inches deep and 6-8 inches apart in rows spaced 6-8 inches apart.',
            'water requirement' => 'Wheat requires 12-15 inches of water during the growing season, including rainfall and irrigation.',
            'Moisture' => '60.00',
            'Irrigation Method' => 'Overhead sprinklers or furrow irrigation are suitable for wheat to provide consistent moisture.',
            'Fertilizers' => 'Incorporate a balanced fertilizer before planting and side-dress with nitrogen during growth.',
            'Planting Tips' => 'Wheat grows best in well-draining loamy soil with full sunlight. Rotate crops to prevent soil depletion and diseases. Harvest when the grain is hard and the plants have turned golden brown.'
        ]);

        Crop::create([
            'id' => '36',
            'name' => 'oats',
            'soil_id' => '3',
            'image' => url('storage/crop/34.jpg'),
            'Recommended Time' => 'Plant oats in early spring as soon as the soil can be worked.',
            'Planting Method' => 'Direct sow seeds 1/2 to 1 inch deep and 1-2 inches apart in rows 12-14 inches apart.',
            'water requirement' => 'Oats require about 1-1.5 inches of water per week, depending on weather conditions.',
            'Moisture' => '65.00',
            'Irrigation Method' => 'Use overhead sprinklers or furrow irrigation to provide consistent moisture for oats.',
            'Fertilizers' => 'Oats benefit from a balanced fertilizer applied before planting and a light side-dress of nitrogen during growth.',
            'Planting Tips' => 'Choose a location with full sunlight and well-draining soil. Oats are hardy and can tolerate a range of soil types but grow best in cool, moist conditions. Harvest when the seed heads have turned golden brown and the kernels are firm.'
        ]);



    }
}
