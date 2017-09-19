<?php

namespace Erikt\CliTest\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MviewStateCommand extends \Symfony\Component\Console\Command\Command
{

    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $connection;


    public function __construct(
        \Magento\Framework\App\ResourceConnection $resource
    ) {
        parent::__construct();
        $this->connection = $resource->getConnection();
    }

    protected function configure()
    {
        $this->setName('erikt:mview')->setDescription('Prints the mview_state.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $mviewSelect = $this->connection->select()
            ->from('mview_state');

        $results = $this->connection->fetchAssoc($mviewSelect);

        foreach ($results as $resultRow) {
            $row = sprintf(
                "%-6d %-40s %-10s %-10s %-22s %-10d",
                $resultRow['state_id'],
                $resultRow['view_id'],
                $resultRow['mode'],
                $resultRow['status'],
                $resultRow['updated'],
                $resultRow['version_id']
            );
            $output->writeln($row);
        }

        //$output->writeln(print_r($results, true));

    }

}

