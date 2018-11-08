<?php

namespace App\Service;


use Psr\Log\LoggerInterface;

class Greeting {

  /**
   * @var \Psr\Log\LoggerInterface
   */
  private $logger;

  /**
   * Greeting constructor.
   *
   * @param \Psr\Log\LoggerInterface $logger
   */
  public function __construct(LoggerInterface $logger) {

    $this->logger = $logger;
  }

  public function greet (string $user_name) {

    $this->logger->info("Greeting $user_name");

    return "Hello $user_name";

  }

}