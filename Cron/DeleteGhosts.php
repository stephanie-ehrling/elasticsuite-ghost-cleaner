<?php

namespace Sehrling\ElasticsuiteGhostCleaner\Cron;

use Exception;
use Psr\Log\LoggerInterface;
use Smile\ElasticsuiteIndices\Block\Widget\Grid\Column\Renderer\IndexStatus;
use Smile\ElasticsuiteIndices\Model\IndexStatsProvider;

class DeleteGhosts
{
    /**
     * @var IndexStatsProvider
     */
    protected $indexStatsProvider;
    /** @var LoggerInterface */
    protected $logger;

    public function __construct(
        IndexStatsProvider $indexStatsProvider,
        LoggerInterface $logger
    ) {
        $this->indexStatsProvider = $indexStatsProvider;
        $this->logger = $logger;
    }

    /**
     * Deletes ghost indices
     *
     * @return void
     */
    public function execute()
    {
        try {
            $indices = $this->indexStatsProvider->getElasticSuiteIndices();
        } catch (Exception $exception) {
            $this->logger->error('Unable to get ElasticSuite Indices: ' . $exception->getMessage());
            $indices = [];
        }

        foreach ($indices as $name => $alias) {
            $indexStats = $this->indexStatsProvider->indexStats($name, $alias);
            if (isset($indexStats['index_status']) && $indexStats['index_status'] === IndexStatus::GHOST_STATUS) {
                $this->indexStatsProvider->deleteIndex($name);
            }
        }
    }
}
