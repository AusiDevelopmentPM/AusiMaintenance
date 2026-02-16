<?php
/**
 * @org AusiDevelopmentPM
 * @author EyNoah1171
 * @year 2026
 * @license Dont steal my Code.
 */

namespace ADPM\Maintenance\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class MaintenanceCommand extends Command
{

    public function __construct()
    {
        parent::__construct("maintenance", "Maintenance command", "/maintenance");
        $this->setPermission("maintenance.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        // TODO: Implement execute() method.
    }
}