<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('court_types')->insert([
            'name' => 'High Courts',
            'sname' => 'Loku Usaviya',
            'tname' => 'Periya Nītimaṉṟam',
            'description' => 'High Courts',
            'sdescription' => 'Loku Usaviya',
            'tdescription' => 'Periya Nītimaṉṟam'
        ]);

        DB::table('courts')->insert([
            'name' => 'High Court - Mount Lavania',
            'sname' => 'Loku Usaviya - Mount Lavania',
            'tname' => 'Periya Nītimaṉṟam - Mount Lavania',
            'court_type_id' => '1'
        ]);

        DB::table('case_types')->insert([
            'name' => 'Divorce',
            'sname' => 'Divorce',
            'tname' => 'Divorce'
        ]);

        DB::table('customers')->insert([
            'username' => 'voxsar@gmail.com',
            'pasword' => '123456',
            'fname' => 'Miyuru',
            'lname' => 'Dharmage',
            'oname' => 'Sangith',
            'address' => '25/1 Kuduwamulla Road Katubedda',
            'sfname' => 'Divorce',
            'slname' => 'Dharmage',
            'soname' => 'Sangith',
            'saddress' => '25/1 Kuduwamulla Road Katubedda',
            'tfname' => 'Divorce',
            'tlname' => 'Dharmage',
            'toname' => 'Sangith',
            'taddress' => '25/1 Kuduwamulla Road Katubedda',
            'mobile' => '+94774395913',
            'land' => '+94774395913',
            'type' => '1',
            'nic' => '+94774395913',
            'email' => 'voxsar@gmail.com',
            'password' => '123456'
        ]);

        DB::table('users')->insert([
            'username' => 'voxsar@gmail.com',
            'password' => '123456',
            'name' => 'Miyuru',
            'email' => 'voxsar@gmail.com'
        ]);

        DB::table('menus')->insert([
            'menuname' => 'Dashboard',
            'menuicon' => 'la-dashboard',
            'has_submenu' => '1'
        ]);

        DB::table('menus')->insert([
            'menuname' => 'Accounts',
            'menuicon' => 'la-dashboard',
            'has_submenu' => '1'
        ]);
        DB::table('menus')->insert([
            'menuname' => 'Cases',
            'has_submenu' => '1'
        ]);
        DB::table('menus')->insert([
            'menuname' => 'Payments',
            'has_submenu' => '1'
        ]);
        DB::table('menus')->insert([
            'menuname' => 'Customers',
            'has_submenu' => '1'
        ]);
        DB::table('menus')->insert([
            'menuname' => 'Courts',
            'has_submenu' => '1'
        ]);
        $post = App\Menu::find(1);
        $post->submenus()->saveMany([
            new App\Submenu(['menuname' => 'Test']),
            new App\Submenu(['menuname' => 'Test 2']),
        ]);
        $post = App\Menu::where("menuname", "Cases")->first();
        $post->submenus()->saveMany([
            new App\Submenu(['menuname' => 'New Case', 'menulink' => '/cases']),
            new App\Submenu(['menuname' => 'Current Cases', 'menulink' => '/cases']),
            new App\Submenu(['menuname' => 'Past Cases', 'menulink' => '/cases']),
            new App\Submenu(['menuname' => 'New Case Types', 'menulink' => '/casetypes']),
            new App\Submenu(['menuname' => 'Case Types', 'menulink' => '/casetypes']),
            new App\Submenu(['menuname' => 'Case Updates', 'menulink' => '/caseupdates']),
        ]);
        $post = App\Menu::where("menuname", "Accounts")->first();
        $post->submenus()->saveMany([
            new App\Submenu(['menuname' => 'Approve Lawyers', 'menulink' => '/accounts/lawyers']),
            new App\Submenu(['menuname' => 'Current Lawyers', 'menulink' => '/accounts/lawyers']),
            new App\Submenu(['menuname' => 'Approve Customers', 'menulink' => '/accounts/customers']),
            new App\Submenu(['menuname' => 'Current Customers', 'menulink' => '/accounts/customers']),
        ]);
        $post = App\Menu::where("menuname", "Courts")->first();
        $post->submenus()->saveMany([
            new App\Submenu(['menuname' => 'Court Types', 'menulink' => '/courttypes']),
            new App\Submenu(['menuname' => 'Courts', 'menulink' => '/courts'])
        ]);
        $post = App\Menu::where("menuname", "Payments")->first();
        $post->submenus()->saveMany([
            new App\Submenu(['menuname' => 'New Invoice']),
            new App\Submenu(['menuname' => 'Active Invoices']),
            new App\Submenu(['menuname' => 'Past Invoices']),
            new App\Submenu(['menuname' => 'Summary']),
            new App\Submenu(['menuname' => 'New Payment']),
            new App\Submenu(['menuname' => 'Pending Payments']),
            new App\Submenu(['menuname' => 'Past Payments']),
        ]);

    }
}
