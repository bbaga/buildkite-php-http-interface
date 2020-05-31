<?php
declare(strict_types=1);

namespace bbaga\BuildkiteApi\Api;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;

interface HttpClientInterface extends ClientInterface, RequestFactoryInterface {}
