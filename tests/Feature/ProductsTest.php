<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function test_example()
  {
    $response = $this->get('/api/products');
    $response->assertStatus(200);
  }

  //=== Test1: Probar que se listen todos los productos
  public function obtener_todos_los_producttos()
  {

    $response = $this->get('/api/products');
    $response->assertStatus(200);
  }

  //=== Test2: Probar obtener un producto en especifico
  public function obtener_producto_especifico()
  {
    $response  =  $this->get('/api/products/1');
    $response->assertStatus(200);
  }

  //=== Test3: Probar crear un nuevo producto
  public function crear_nuevo_producto()
  {
    $response = $this->post('/api/products', [
      'nombre' => 'Producto 1'
    ]);
    $response->assertStatus(201);
  }

  //=== Test4: Probar actualizar un producto existente
  public function actualizar_producto_existente()
  {
    $response = $this->put('/api/products/1', [
      'nombre' => 'Producto 1'
    ]);
    $response->assertStatus(200);
  }

  //=== Test5: Probar eliminar un producto existente
  public function eliminar_producto_existente()
  {
    $response = $this->delete('/api/products/1');
    $response->assertStatus(200);
  }
}
