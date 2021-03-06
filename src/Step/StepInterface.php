<?php

namespace Couscous\Step;

use Couscous\Model\Repository;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Generation step.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
interface StepInterface
{
    /**
     * Process the given repository.
     *
     * @param Repository      $repository
     * @param OutputInterface $output     Output for the user.
     */
    public function __invoke(Repository $repository, OutputInterface $output);
}
