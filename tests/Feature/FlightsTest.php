<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlightsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();


        $this->signIn();

    }

    /** @test */
    public function can_admin_see_flights_menu_in_admin_panel() 
    {
        $url = url('admin/home');
        
        $response = $this->get($url);

        $response->assertSeeText('Flight Management');

    }

    /** @test */
    public function can_admin_see_visit_flights_page_in_admin_panel() 
    {

        $url = url('admin/flights');
        
        $response = $this->get($url);

        $response->assertOk();

        $response->assertSeeText('Flight List');

    }

    /** @test */
    public function can_admin_see_visit_flights_create_page_in_admin_panel() 
    {
        
        $url = url('admin/flights/create');
        
        $response = $this->get($url);

        $response->assertOk();

        $response->assertSeeText('Add Flight Data');

    }

    /** @test */
    public function can_admin_add_flights_data() {

        $url = url('admin/flights/store');

        $data = [
            'airlines' => 'airindia',
            'depature_city' => 'dhaka',
            'arival_city' => 'melborn',
            'class' => 'first',
            'ticket_price' => 1000000,
            'depature_date' => date("yyyy-mm-dd"),
            'arival_date' => date("yyyy-mm-dd"),
            'depature_time' => time(),
            'arival_time' => time(),
        ];

        $resp = $this->post($url, $data);

        
        $resp->assertStatus(302);

        $resp->assertRedirect('admin/flights');

    }

    /** @test */
    public function admin_cant_add_flights_if_field_is_missing_data() {

        $this->withExceptionHandling();

        $url = url('admin/flights/store');

        $data = [
            'airlines' => '',
            'depature_city' => 'dhaka',
            'arival_city' => 'melborn',
            'class' => 'first',
            'ticket_price' => 1000000,
            'depature_date' => date("Y/m/d"),
            'arival_date' => date("Y/m/d"),
            'depature_time' => time(),
            'arival_time' => time(),
        ];

        $resp = $this->post($url, $data);

        $resp->assertSessionHasErrors('airlines');

    }
}
