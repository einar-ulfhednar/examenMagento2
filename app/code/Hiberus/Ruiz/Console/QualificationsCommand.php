<?php

namespace Hiberus\Ruiz\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QualificationsCommand extends Command
{
    /**
     * @var \Hiberus\Ruiz\Model\Qualifications
     */
    protected \Hiberus\Ruiz\Model\Qualifications $qualifications;

    /**
     * @var \Hiberus\Ruiz\Block\Index
     */
    protected \Hiberus\Ruiz\Block\Index $block;

    /**
     * @param \Hiberus\Ruiz\Model\Qualifications $qualifications
     * @param \Hiberus\Ruiz\Block\Index $block
     */
    public function __construct(
        \Hiberus\Ruiz\Model\Qualifications $qualifications,
        \Hiberus\Ruiz\Block\Index $block
    ) {
        $this->qualifications = $qualifications;
        $this->block = $block;
        parent::__construct();
    }

    public function configure()
    {
        $this
            ->setName('hiberus:ruiz')
            ->setDescription('Show qualifications table');
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ltsQualifications = $this->block->getQualifications();
        $output->writeln('<info>---------------------------Student\'s Notes---------------------------</info>');

        if (count($ltsQualifications) == 0) {
            $output->writeln('<info>There are no qualifications.</info>');
        } else {
            foreach ($ltsQualifications as $qualification) {
                $output->writeln('<info>| ID -> ' . $qualification->getIdExam() .
                    ' | First Name -> ' .  $qualification->getFirstName() .
                    ' | Last Name -> ' .  $qualification->getLastName() .
                    ' | Mark -> ' . $qualification->getMark() . ' |</info>');
            }
        }
        $output->writeln('<info>----------------------------------------------------------------------</info>');
    }
}
