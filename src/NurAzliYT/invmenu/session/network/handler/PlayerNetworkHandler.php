<?php
declare(strict_types=1);

namespace NurAzliYT\invmenu\session\network\handler;

use Closure;
use NurAzliYT\invmenu\session\network\NetworkStackLatencyEntry;

interface PlayerNetworkHandler{

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry;
}
