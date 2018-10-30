    <?php  class JobeetJobTable extends Doctrine_Table
{

        static public $types = array(
            'full-time' => 'Full time',
            'part-time' => 'Part time',
            'freelance' => 'Freelance',
        );

        public function getTypes()
        {
            return self::$types;
        }



        public function retrieveActiveJob(Doctrine_Query $q)
    {
        return $this->addActiveJobsQuery($q)->fetchOne();
    }
}