<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Messi',
            'description' => 'Argentina.',
            'place of birth' => 'Santa Fe, Del Rosario.',
            'height and weight' => 'Height: 1.7m and weight: 72kg.',
            'school of graduation' => 'La Masia Football School.',
            'Professional characteristics' => 'Excellent technique, good consciousness, superb shooting.His left and right feet are perfectly balanced, and he shoots well.Messi dribble balance strong, high physical resistance.Messi foot flexibility, left and right foot inside cut strong.His feet exquisite, the Angle of the ball is tricky, free kick direct scoring also become a unique Landscape of La Liga.With his excellent ball control, Messi often drifts past defenders, creating space and opportunities for his teammates as defenders repeatedly try to stop him with close-fitting and fouls.',
            'link' => 'Right wing, center, two forward.',
            'major awards' => '2009 European Player of the Year (L "Equipe, Ballon" d Or),
            2009, 2019 FIFA Player of the Year, 10, 11, 12, 15, 19
            2006, 2009, 2011, 2015 Champions League winners,
            2009, 2010, 2011, 2012, 2015 Champions League Golden Boot,
            Ten La Liga titles,
             2005 World Youth Champion, World Youth Golden Ball award, Golden Boot Award,
            Gold MEDALS of men s soccer in 2008 Beijing Olympic Games,
           2010, 2012, 2013 La Liga Golden Shoe award/European Golden Shoe Award,
            Runner-up and World Cup Player of the Year 2014.',
            'image' => 'Messi.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Antoine Griezmann',
            'description' => 'France',
             'place of birth' => 'The French anadarko.',
            'height and weight' => 'Height: 1.76m and weight: 70kg.',
            'school of graduation' => 'La Liga Real Sociedad Youth team.',
            'Professional characteristics' => 'Feet fast frequency, light intelligence.',
            'link' => 'Forward, left wing, midfield.',
            'major awards' => 'The 2018 World Cup winners in Russia,
             Frances Player of the Year at Euro 2016,
             The Golden Shoe award at the 2016 European Championships in France.',
            'image' => 'geleiziman.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Philippe Coutinho',
            'description' => 'Brazil',
              'place of birth' => 'Rio de Janeiro.',
            'height and weight' => 'Height: 1.72m and weight: 68kg.',
            'school of graduation' => 'Vasco Da Gamma Youth Training.',
            'Professional characteristics' => 'Fine technique and accurate passing.',
            'link' => 'Front waist (side front waist).',
            'major awards' => '1 Americas Cup champion,
            1 Champions League title,
            1 Bundesliga Champion,
            Two Spanish La Liga titles,
            1 Italian Cup champion,
            The Kings Cup of Spain once.',
            'image' => 'kudineao.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Frenkie de Jong',
            'description' => 'Netherlands',
              'place of birth' => 'Acres.',
             'height and weight' => 'Height: 1.8m and weight: 77kg.',
            'school of graduation' => 'Wilhelm II Football Club Tilburg Youth Academy.',
            'Professional characteristics' => 'A player who is intelligent, technically gifted and has a very good eye for the game.',
            'link' => 'Midfielders, defenders.',
            'major awards' => 'The Best Player of the season 2018-19,
            The Young Dutch player of the Year 2019,
            Young Player of the Year 2019 European National League.',
            'image' => 'fulangjiderong.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Gerard Pique',
            'description' => 'Sparn',
              'place of birth' => 'Barcelona.',
            'height and weight' => 'Height: 1.92m and weight: 85kg.',
            'school of graduation' => 'La Masia Football School.',
            'Professional characteristics' => 'His footwork was exquisite, he was even good at dribbling and shooting, and his man-to-man defence was very different from Puyols with his foreplay and positioning.',
            'link' => 'Central defender (also available as a back or wing-back)',
            'major awards' => 'The 2012 European Championships,
            The 2010 World Cup winners,
            Eight La Liga titles,
            Four-time Champions League winner,
            Six-time Champion of Spains Kings Cup,
            Three-time European Super Cup champion,
            1 Premier League title,
            Six-time Spanish Super Cup winner,
             Three-time World Club Cup champion.',
            'image' => 'pike.jpg',
        ],
         '6' => [
            'id' => 6,
            'name' => 'Marc-André ter Stegen',
            'description' => 'Germany ',
             'place of birth' => 'monchengladbach.',
             'height and weight' => 'Height: 1.87m and weight: 85kg.',
             'school of graduation' => 'Youth Training camp of Moensing Gladbach Football Club.',
             'Professional characteristics' => 'Quick save, rarely out of hand, quick reaction.',
            'link' => 'goalkeeper',
             'major awards' => 'The 2017 Confederations Cup winners,
              2009 European U-17 Championship,
              2019 Spanish La Liga champions Barcelona,
              2018 Spanish La Liga champions Barcelona,
              2018 Spanish Copa Del Rey champion Barcelona,
              2018 Spanish Super Cup winner Barcelona,
              2017 Spanish Copa Del Rey winner Barcelona,
              2016 Spanish La Liga champions Barcelona,
              2016 Spanish Copa Del Rey champion Barcelona,
              2016 Spanish Super Cup champion Barcelona, 
               2015 World Club Cup champion Barcelona,
             2015 Champions League winners Barcelona,
             2015 European Super Cup winners Barcelona,
              Barcelona, 2015 Spanish La Liga champions,
            2015 Spanish Copa Del Rey winner Barcelona.',
            'image' => 'teershitegen.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
