<?php

namespace Database\Seeders;

use App\Models\MemberShip_level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class membership_levels_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        MemberShip_level::create([
            'id'=>'1' ,
            'name'=>'Trial' ,
            'Features'=>'Limited-time access to select premium features or resources to explore the benefits of membership.
                         Access to a subset of tools and content to help users evaluate the value proposition.' ,
            'Benefits'=>'Opportunity to experience the benefits of membership before committing to a paid subscription.
                         Risk-free trial period to assess the suitability of the application for specific farming needs or objectives.' ,

            'Price'=>'Free'
        ]);


        MemberShip_level::create([
            'id'=>'2' ,
            'name'=>'Basic' ,
            'Features'=>'Access to basic agricultural tools and resources such as identification guides, and basic weather forecasts.
                         Limited access to community forums and discussion groups.' ,
            'Benefits'=>'Entry-level pricing for users who are just getting started with farming or gardening.
                         Opportunity to upgrade to higher membership levels for additional features and benefits.' ,

            'Price'=>'50EG/Month'
        ]);

        MemberShip_level::create([
            'id'=>'3' ,
            'name'=>'Premium' ,
            'Features'=>'Exclusive access to premium content such as expert interviews, and advanced tutorials.
                         Discounts on agricultural supplies, equipment, and services through partnerships with industry vendors.
                         Priority customer support and dedicated assistance for technical issues or inquiries.' ,
            'Benefits'=>'Enhanced productivity and profitability for experienced farmers or agricultural professionals.
                         Networking opportunities with other premium members and industry experts..' ,

            'Price'=>'100EG/Month'
        ]);

        MemberShip_level::create([
            'id'=>'4' ,
            'name'=>'Enterprise' ,
            'Features'=>'All features included in the Premium Membership, plus:
                         Multi-user accounts with permission controls for team collaboration and project management.
                         Advanced customization options for personalized dashboards, reports, and alerts.
                         Integration with enterprise-level software systems such as ERP or supply chain management tools' ,
            'Benefits'=>'alignment with enterprise goals and objectives through tailored solutions and support services.
                         Access to exclusive enterprise-level features and discounts for bulk purchases or extended contracts.' ,

            'Price'=>'150EG/Month'
        ]);

    }
}
