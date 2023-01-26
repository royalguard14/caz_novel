<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         Schema::create('clients_inquires', function (Blueprint $table) {
//             $table->id();
//             $table->text('company');
//             $table->text('address');
//             $table->text('contact_email');
//             $table->text('contact_number');
//             $table->text('date');
//             $table->text('type');
//             $table->text('message');
 
//         });


// //with account
//         Schema::create('clients_pending', function (Blueprint $table) {
//             $table->id();
//             $table->text('company');
//             $table->text('branch');
//             $table->text('address');
//             $table->text('contact_email');
//             $table->text('contact_number');
//             $table->text('status');
//             $table->text('steps');
//             $table->text('date');
//             $table->text('type');
//             $table->text('unicode')->unique();
//             $table->text('remarks');
 
//         });


//    //temp product register
//         Schema::create('product_temp_pending', function (Blueprint $table) {
//             $table->id();
//             $table->text('unicode'); //from client_pending
//             $table->text('product_name');
//             $table->text('product_code'); //unicode+unicode-id
//             $table->text('product_description');
//             $table->text('status');
//             $table->text('type');
//             $table->text('remarks');
 
//         });


//         Schema::create('product_approved', function (Blueprint $table) {
//             $table->id();
//             $table->text('company');
//             $table->text('branch');
//             $table->text('auditors');
//             $table->text('product_code'); //from p_t_p
//             $table->text('product_description');
//             $table->text('status');
//             $table->text('date');
//             $table->text('datefrom');
//             $table->text('dateto');
//             $table->text('totalprice');
//             $table->text('remarks');
 
//         });



        Schema::create('clients_company', function (Blueprint $table) {
            $table->id();
            $table->text('company_code');
            $table->text('company_name');
            $table->text('company_contact');
 
        });


        Schema::create('clients_branches', function (Blueprint $table) {
            $table->id();
            $table->text('company_code');
            $table->text('company_name');
            $table->text('branch_code');
            $table->text('branch_name');
        });


        Schema::create('clients_store', function (Blueprint $table) {
            $table->id();
            $table->text('uniq_code')->unique();
            $table->text('company_code');
            $table->text('company_name');
            $table->text('branch_code');
            $table->text('branch_name');
            $table->text('store_code');
            $table->text('store_name');
            $table->text('store_contact');
            $table->text('store_address');
            $table->text('store_head');
            $table->text('store_username');
             
        });
         
          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
