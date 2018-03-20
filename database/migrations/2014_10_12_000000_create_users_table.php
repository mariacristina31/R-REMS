<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('CompanyBackgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->longText('introduction');
            $table->longText('technical_expertise');
            $table->longText('clients_fullfilment');
            $table->longText('company_assets');
            $table->longText('futuristici_deas');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('CompanyInfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('company_name');
            $table->longText('office_address');
            $table->longText('tin');
            $table->string('sec_reg_no');
            $table->date('date_of_reg');
            $table->date('company_number');
            $table->longText('plant_address');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('BoardOfDirectors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_intial');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('DesignAndGeneralWorks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('Tradings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('CompletedProjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('project');
            $table->longText('location');
            $table->longText('client');
            $table->string('nature_of_work');
            $table->date('date_start');
            $table->date('date_completed');
            $table->longText('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('OngoingProjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('project');
            $table->longText('location');
            $table->longText('client');
            $table->string('nature_of_work');
            $table->date('date_start');
            $table->date('target_date_completion');
            $table->longText('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('Transportations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('ToolsEquipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('no');
            $table->string('unit');
            $table->integer('quantity');
            $table->string('remarks');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('OfficeAndWarehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('OrganizationalStructures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('Affiliates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('project_involvement');
            $table->longText('location');
            $table->string('project_owner');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('PermitsAndLicenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('AffiliatesAndMemberships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('CompanyBackgounds');
        Schema::dropIfExists('CompanyInfos');
        Schema::dropIfExists('BoardOfDirectors');
        Schema::dropIfExists('DesignAndGeneralWorks');
        Schema::dropIfExists('Tradings');
        Schema::dropIfExists('CompletedProjects');
        Schema::dropIfExists('OngoingProjects');
        Schema::dropIfExists('Transportations');
        Schema::dropIfExists('ToolsEquipments');
        Schema::dropIfExists('OfficeAndWarehouses');
        Schema::dropIfExists('OrganizationalStructures');
        Schema::dropIfExists('Affiliates');
        Schema::dropIfExists('PermitsAndLicenses');
        Schema::dropIfExists('AffiliatesAndMemberships');

    }
}
