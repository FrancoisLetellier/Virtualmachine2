<?php

namespace AppBundle\Command;

use AppBundle\Entity\Employees;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:import_command')
            ->setDescription('Import database with CSV file');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $tab[] = array();
        $file = fopen(__DIR__ . "/employees.csv", "r");
//Output a line of the file until the end is reached
        while(!feof($file))
        {
           $line = fgets($file);
           $tab = explode(",", $line);
           dump($tab);


        }
        fclose($file);
    }

}

<?php
namespace ConstestBundle\Command;
use ConstestBundle\Entity\Emp;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
class ImportCommand extends ContainerAwareCommand
{
    const INTERVAL = 1000;

    /** @var  EntityManager */
    private $em;

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        parent::initialize($input, $output);
        $this->em = $this->getContainer()->get('doctrine')->getManager();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('constest:import')
            ->setDescription('update enterprise directory')
            ->addOption('force', InputOption::VALUE_NONE);
    }
}
/*


//***
     * {@inheritdoc}
     */
/*
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $empRepo = $this->em->getRepository("ConstestBundle:Emp");
        $file = $this->getContainer()->get("kernel")->getRootDir() . "/../data/employees.csv";

        $fileHandle = new \SplFileObject($file, 'r');
        $fileHandle->seek(PHP_INT_MAX);
        $totalRows = $fileHandle->key() + 1;
        $fileHandle->seek(0);
        $progress = new ProgressBar($output, $totalRows / self::INTERVAL);
        $output->writeln("Start working with file : " . $file);

        $totalImport = 0;
        $totalIgnored = 0;

        while (!$fileHandle->eof()){
            $row = $fileHandle->fgetcsv();
            $id = $row[0];
            if (!$empRepo->find($id)){
                if ($input->getOption('force')) {
                    $emp = new Emp();
                    $emp->setId($id);
                    $emp->setBirthdate(new \DateTime($row[1]));
                    $emp->setLastname($row[2]);
                    $emp->setFirstname($row[3]);
                    $emp->setGender($row[4]);
                    $emp->setHiringdate(new \DateTime($row[5]));
                    $this->em->persist($emp);
                }
                $totalImport++;
            } else {
                $totalIgnored++;
            }
            if (($totalImport + $totalIgnored) % self::INTERVAL === 0){
                $progress->advance();
                if ($input->getOption('force')) {
                    $this->em->flush();
                }
            }
        }
        if ($input->getOption('force')) {
            $this->em->flush();
        }
        $progress->finish();
        $option = "";
        if ($input->getOption('force')) {
            $option = "(simulated)";
        }
        $output->writeln("Imported $option : " . $totalImport);
        $output->writeln("Ignored  : " . $totalIgnored);
    }*/

