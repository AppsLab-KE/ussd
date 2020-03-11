<?php
namespace AppsLab\Ussd\Contracts;

interface RouteInterface
{
    public function get(string $uri, string $controllerFunction);
    public function post(string $uri, string $controllerFunction);
    public function delete(string $uri, string $controllerFunction);
    public function show(string $uri, string $controllerFunction);
}
