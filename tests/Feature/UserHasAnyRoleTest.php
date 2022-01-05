<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserHasAnyRoleTest extends TestCase
{
    /**
     * @test
     */
    public function redireciona_par_login_pois_o_usuario_nao_esta_logado()
    {
        $response = $this->get(route('painel.index'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    /**
     * @test
     */
    public function aborta_pois_o_usuario_nao_tem_role()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('painel.index'));

        $response->assertStatus(403);
    }
}
