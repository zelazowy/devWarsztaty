<?php

namespace AppBundle\Command;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WorkshopReminderCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this
            ->setName("workshop:reminder")
            ->setDescription("Komenda wysyłająca przypomnienia o nadchodzących warsztatach");
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = $this->getContainer()->get("doctrine.orm.default_entity_manager");

        $users = $manager->getRepository(User::class)->findAll();

        foreach ($users as $user) {
            $workshops = $user->getWorkshops();

            if ($workshops->isEmpty()) {
                $output->writeln(sprintf('Użytkownik "%s" nie zapisał się na żadne warsztaty', $user->getUsername()));
                continue;
            }

            $output->writeln(sprintf('Użytkownik "%s" zapisał się na warsztaty:', $user->getUsername()));
            foreach ($workshops as $workshop) {
                $output->writeln(sprintf('    * <info>%s</info>', $workshop->getName()));
            }
        }
    }
}
