<?php
class CatalogRepository
{
	private PDO $db;
	private array $tables = [
		'single_lines' => 'singleline',
		'professional_batteries' => 'batter',
		'single' => 'singl',
		'balls' => 'balls',
		'stage_pyrotechnics' => 'scenepir',
	];

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function getPage(string $category, int $page, string $sort, ?float $diameter): array
	{
		if(!isset($this->tables[$category])) return [[], 0, 1];
		$table = $this->tables[$category];
		$where = '';
		$params = [];
		if($diameter !== null){
			$where = ' WHERE diameter = :diameter';
			$params[':diameter'] = $diameter;
		}
		$countQuery = $this->db->prepare("SELECT COUNT(*) FROM `$table`$where");
		foreach($params as $key => $value) $countQuery->bindValue($key, $value);
		$countQuery->execute();
		$total = (int)$countQuery->fetchColumn();
		$pageCount = max(1, (int)ceil($total / 9));
		$page = min($page, $pageCount);
		$order = match($sort){
			'price' => 'price ASC, id ASC',
			'diameter' => 'diameter ASC, id ASC',
			default => 'id ASC',
		};
		$query = $this->db->prepare("SELECT id, articul, name, diameter, effect, video, packaging, amount, weight, price FROM `$table`$where ORDER BY $order LIMIT :limit OFFSET :offset");
		foreach($params as $key => $value) $query->bindValue($key, $value);
		$query->bindValue(':limit', 9, PDO::PARAM_INT);
		$query->bindValue(':offset', ($page - 1) * 9, PDO::PARAM_INT);
		$query->execute();
		return [$query->fetchAll(), $total, $page];
	}
}
