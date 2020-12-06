<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{

	private $query;

	public function reset(): void
	{
		$this->query = new \stdClass();
	}
	public function select(string $table, array $fields): QueryBuilderInterface
	{
		$this->reset();
		$this->query->base = "SELECT ". implode(', ', $fields) ." FROM $table";
		$this->query->type = 'select';
		return $this;
	}

	public function where(string $column, string $operator, string $value): QueryBuilderInterface
	{
		if(!in_array($this->query->type, ['select', 'update', 'delete'])){
			throw new \Exception('Where must be used only with SELECT, UPDATE, DELETE');
		}
		$this->query->where[] = $column . ' ' . $operator . ' ' . $value;
		return $this;
	}

	public function limit(int $offset, int $count): QueryBuilderInterface
	{
		$this->query->limit = 'LIMIT ' . $offset . ', ' . $count;
		return $this;
	}

	public function get(): string
	{
		$query = $this->query->base;
		if(isset($this->query->where)){
			$query .= " WHERE ". implode(' AND ', $this->query->where);
		}
		if(isset($this->query->limit)){
			$query .= " " . $this->query->limit;
		}
		return $query;
	}
}