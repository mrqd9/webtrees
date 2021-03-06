<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Census;

use Fisharebest\Webtrees\TestCase;

/**
 * Test harness for the class CensusOfScotland1911
 */
class CensusOfScotland1911Test extends TestCase
{
    /**
     * Test the census place and date
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfScotland1911
     *
     * @return void
     */
    public function testPlaceAndDate(): void
    {
        $census = new CensusOfScotland1911();

        self::assertSame('Scotland', $census->censusPlace());
        self::assertSame('02 APR 1911', $census->censusDate());
    }

    /**
     * Test the census columns
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfScotland1911
     * @covers \Fisharebest\Webtrees\Census\AbstractCensusColumn
     *
     * @return void
     */
    public function testColumns(): void
    {
        $census  = new CensusOfScotland1911();
        $columns = $census->columns();

        self::assertCount(17, $columns);
        self::assertInstanceOf(CensusColumnFullName::class, $columns[0]);
        self::assertInstanceOf(CensusColumnRelationToHeadEnglish::class, $columns[1]);
        self::assertInstanceOf(CensusColumnAgeMale::class, $columns[2]);
        self::assertInstanceOf(CensusColumnAgeFemale::class, $columns[3]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[4]);
        self::assertInstanceOf(CensusColumnConditionEnglish::class, $columns[5]);
        self::assertInstanceOf(CensusColumnYearsMarried::class, $columns[6]);
        self::assertInstanceOf(CensusColumnChildrenBornAlive::class, $columns[7]);
        self::assertInstanceOf(CensusColumnChildrenLiving::class, $columns[8]);
        self::assertInstanceOf(CensusColumnChildrenDied::class, $columns[9]);
        self::assertInstanceOf(CensusColumnOccupation::class, $columns[10]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[11]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[12]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[13]);
        self::assertInstanceOf(CensusColumnBirthPlace::class, $columns[14]);
        self::assertInstanceOf(CensusColumnNationality::class, $columns[15]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[16]);

        self::assertSame('Name', $columns[0]->abbreviation());
        self::assertSame('Relation', $columns[1]->abbreviation());
        self::assertSame('AgeM', $columns[2]->abbreviation());
        self::assertSame('AgeF', $columns[3]->abbreviation());
        self::assertSame('Lang', $columns[4]->abbreviation());
        self::assertSame('Condition', $columns[5]->abbreviation());
        self::assertSame('YrM', $columns[6]->abbreviation());
        self::assertSame('ChA', $columns[7]->abbreviation());
        self::assertSame('ChL', $columns[8]->abbreviation());
        self::assertSame('ChD', $columns[9]->abbreviation());
        self::assertSame('Occupation', $columns[10]->abbreviation());
        self::assertSame('Ind', $columns[11]->abbreviation());
        self::assertSame('Emp', $columns[12]->abbreviation());
        self::assertSame('Home', $columns[13]->abbreviation());
        self::assertSame('Birthplace', $columns[14]->abbreviation());
        self::assertSame('Nat', $columns[15]->abbreviation());
        self::assertSame('Infirm', $columns[16]->abbreviation());

        self::assertSame('Name and surname', $columns[0]->title());
        self::assertSame('Relation to head of household', $columns[1]->title());
        self::assertSame('Age (males)', $columns[2]->title());
        self::assertSame('Age (females)', $columns[3]->title());
        self::assertSame('Language spoken', $columns[4]->title());
        self::assertSame('Condition', $columns[5]->title());
        self::assertSame('Years married', $columns[6]->title());
        self::assertSame('Children born alive', $columns[7]->title());
        self::assertSame('Children who are still alive', $columns[8]->title());
        self::assertSame('Children who have died', $columns[9]->title());
        self::assertSame('Rank, profession or occupation', $columns[10]->title());
        self::assertSame('Industry', $columns[11]->title());
        self::assertSame('Employer, worker or own account', $columns[12]->title());
        self::assertSame('Working at home', $columns[13]->title());
        self::assertSame('Where born', $columns[14]->title());
        self::assertSame('Nationality', $columns[15]->title());
        self::assertSame('Infirmity', $columns[16]->title());
    }
}
