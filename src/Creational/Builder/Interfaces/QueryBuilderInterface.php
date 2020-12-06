<?php 

namespace Patterns\Creational\Builder\Interfaces;

interface QueryBuilderInterface {
	public function set(): void;
	public function select(string $table, array $fields): self;
	public function where(string $column, string $operator, string $value): self;
	public function limit(int $offset, int $count): self;
	public function get(): string;
}