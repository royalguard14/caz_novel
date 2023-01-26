<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_details', function (Blueprint $table) {
            $table->id();
            $table->text('company_logo')->nullable();
            $table->text('company_name');
            $table->text('company_description');
            
            $table->text('company_address');
            $table->text('company_contact');
            
            $table->text('company_owner');

        });


         Schema::create('client_request', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('company_id');
            $table->text('request_name');
            $table->text('request_type');
            $table->text('request_datetime');
            $table->text('request_status');
            
        });


         Schema::create('client_products', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('company_id');
            $table->text('item');
            $table->text('code');
            $table->text('status');
            
            
        });


          Schema::create('client_files', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('type');
            $table->text('letters');
            $table->text('description');
            $table->text('path')->nullable();
            $table->text('date_upload')->nullable();
            $table->text('status');
            $table->text('log')->nullable();
            
            
        });



          Schema::create('process_log', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('remarks');
            $table->text('path')->nullable();
            $table->text('date_upload')->nullable();
            $table->text('encoder');
            $table->text('log')->nullable();
            
            
        });



          Schema::create('certified', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('cert_no');
            $table->text('date_from');
            $table->text('date_to');
            $table->text('file_path');
            $table->text('uploader');
            $table->text('log')->nullable();
            
            
        });




          Schema::create('comments', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('type');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('comment');
            $table->text('date');
            $table->text('log')->nullable();
            
            
        });




          Schema::create('report_audit', function (Blueprint $table) {
            $table->id(); 
            $table->text('unicode');
            $table->text('file_path');
            $table->text('date');
            $table->text('remarks')->nullable();
            $table->text('log')->nullable();
            
            
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_details');
    }
}
