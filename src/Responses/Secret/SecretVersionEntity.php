<?php


namespace AzKeyVault\Responses\Secret;


use AzKeyVault\Contracts\EntityInterface;

class SecretVersionEntity implements EntityInterface {

	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */
	public $id;
	/**
	 * @var string
	 */
	public $url;
	/**
	 * @var bool
	 */
	public $enabled;
	/**
	 * @var SecretAttributeEntity
	 */
	public $attributes;

	public function __construct(string $name, string $id, string $url, SecretAttributeEntity $attributes) {
		$this->name = $name;
		$this->id = $id;
		$this->url = $url;
		$this->attributes = $attributes;
	}

}