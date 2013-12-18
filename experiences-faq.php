<?php

require('partials/config.php');

//meta info
// $cfg['page_title'] = "";
// $cfg['page_description'] = "";

$cfg['current_page_slug'] = "faqs";
$cfg['hero_title'] = "QUESTIONS?";
$cfg['hero_subtitle'] = "";

require('partials/subheader.php');
require('partials/faqs-data.php');

?>

    <?php
      require('partials/experiences-nav.php');
    ?>

    <section class="main-section">
      <div class="row">
        
        <div class="large-12 columns">
          <div class="section-header text-center">
            <h2>Frequently Asked Questions</h2>
            <h3>get answers below or <a href="<?php echo $base_url; ?>/download/faqs">download as a pdf</a></h3>
          </div>
        </div>

      </div>
    </section>
  
    <section class="faq">
      <ul>
        <li>
          <h4>Important Dates (5)</h4>
          <dl>
            <dt>Q. When is the deposit due?</dt>
            <dd>A non-­refundable deposit application fee is due at the time of online registration. This fee is applied towards the cost of your trip. $<?php echo $seven_day_application_fee; ?> application fee (non-refundable deposit) for 7 day trip option and $<?php echo $four_day_application_fee; ?> application fee (non-refundable deposit) for 4 day trip option.</dd>
            <dt>Q. When is my trip balance due?</dt>
            <dd>Final balance on all registrations is due on or before <?php echo $trip_balance_due; ?>.</dd>
            <dt>Q. What are the registration deadlines for the trip?</dt>
            <dd>Regular Registration: <?php echo $registration_deadline_7day['regular']; ?>.  Late Registration: <?php echo $registration_deadline_7day['late']; ?>. After <?php echo $registration_deadline_7day['last']; ?> registrations are based on availability only.</dd>
            <dt>Q. What if I cannot pay my balance by the due date?</dt>
            <dd>Failure to pay the final balance of the trip within 5 business days after the balance due date will DEACTIVATE a participant&rsquo;s account. Participants with DEACTIVATED accounts are not allowed to go on the trip until they have established an agreeable payment plan (see Payment Plans section below) with Spread Truth Ministries. Once the participant and Spread Truth Ministries have agreed upon a payment plan, the participant&rsquo;s account will be RE-ACTIVATED and the participant will be allowed to go on the trip.</dd>
            <dt>Q. Are there any payment plans to pay off my final balance?</dt>
            <dd>A participant may choose to pay the remaining portion of their balance within an additional 3 - week period after the due date of the final balance; however, an additional 5% Extended Payment Fee (calculated from the participant&rsquo;s remaining balance) is added to cover the cost of credit card and banking fees. Special payment plans may be arranged on a &ldquo;per individual&rdquo; basis at the discretion of Spread Truth Ministries. Participants may choose to pay by credit card or automatic withdrawal from a checking/savings account.</dd>
          </dl>
        </li>

        <li>
          <h4>Travel Information (3)</h4>
          <dl>
            <dt>Q. What are our lodging accommodations?</dt>
            <dd><?php echo implode("<br/>", $lodging_accomodations); ?></dd>
            <dt>Q. What about my transportation to/from New York City?</dt>
            <dd>Team members have the option of Spread Truth Ministries booking their transportation and transfers through our travel agency, Suzi Davis Travel. This can include transportation by plane, train or bus from any departure city of the team member&rsquo;s choosing. This transportation option will then be billed through Spread Truth Ministries upon purchase of the ticket. Transportation booked through Spread Truth has the opportunity to use donations received toward this cost. Travel (airfare) costs are typically due within 10 business days of confirmed booking by the team member. This cost is added to the trip members cost and can be viewed online at their <a href="http://go.spreadtruth.com">(GO) Trip account</a>. Team members who choose not to book transportation through Spread Truth Ministries need to follow the guidelines sheet provided for arrival, departure and transfer options. These guidelines can be found at the end of this document. Spread Truth does not reimburse with donated funds for those booking their own transportation.</dd>
            <dt>Q. Can I drive to New York City?</dt>
            <dd>Team members are welcome to drive to New York City if they wish. If you are coming as a group you will need to book your own charter bus to drop you off and pick you up at the hotel. If you are coming by car or mini van, you may park at the hotel for $25 a day (no in/out privileges). If you are coming by SUV, passenger van, shuttle, or bus, we will work with you to find parking. Parking in lots near the hotel in Brooklyn or in economy lots near an airport can be $50-$100 a day for these types of vehicles. Please contact Spread Truth Ministries by May 15 with your type of vehicle and we can help you make arrangements for your parking.</dd>
          </dl>
        </li>

        <li>
          <h4>Trip Costs / Raising Money (14)</h4>
          <dl>
            <dt>Q. What is the trip cost?</dt>
            <dd>

              <table>
                <thead>
                  <tr>
                    <th>Registration</th>
                    <th>Dates</th>
                    <th>4 Day Cost</th>
                    <th>7 Day Cost</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Regular</td>
                    <td><?php echo $registration_deadline_7day['regular']; ?></td>
                    <td>$<?php echo $trip_cost_4day['regular']; ?></td>
                    <td>$<?php echo $trip_cost_7day['regular']; ?></td>
                  </tr>
                  <tr>
                    <td>Late</td>
                    <td><?php echo $registration_deadline_7day['late']; ?></td>
                    <td>$<?php echo $trip_cost_4day['late']; ?></td>
                    <td>$<?php echo $trip_cost_7day['late']; ?></td>
                  </tr>
                  <tr>
                    <td>Last Call</td>
                    <td>After <?php echo $registration_deadline_7day['last']; ?></td>
                    <td>$<?php echo $trip_cost_4day['last']; ?></td>
                    <td>$<?php echo $trip_cost_7day['last']; ?></td>
                  </tr>
                </tbody>
              </table>

              <p><u>All balances due for the above registrations are on or before <?php echo $trip_balance_due; ?></u></p>

              <p>Registrations after <?php echo $registration_deadline_7day['last']; ?> are based on available space only. Rate must be paid at time of application to reserve this type of registration.</p>

              <p>If you have chosen for Spread Truth to book your transportation, the cost of airfare and airport transfers will be added to overall all trip cost.  Airfare/transfer cost is invoiced and due 10 business days after booking.</p>

            <dt>Q. What does the cost include?</dt>
            <dd>The trip cost includes hotel accommodations (Quad occupancy - 4 people with 2 beds in a room), meeting space, unlimited ride subway card, trained leaders/directors, training materials, support materials, and evangelism materials as well as online account management which includes processing of all donation support.</dd>

            <dt>Q.  What do I have to pay up front?</dt>
            <dd>
              <p>These application fees are due at online registration and are non-refundable.</p>
              <p>
                <table>
                  <thead>
                    <tr>
                      <th>Trip Type</th>
                      <th>Cost</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>4 Day</td>
                      <td>$<?php echo $four_day_application_fee; ?></td>
                    </tr>
                    <tr>
                      <td>7 Day</td>
                      <td>$<?php echo $seven_day_application_fee; ?></td>
                    </tr>
                  </tbody>
                </table>
              </p>
            </dd>

            <dt>Q. What if I don’t want Quad Occupancy?</dt>
            <dd>At time of application, you may choose an occupancy other than Standard (Quad).  Additional fees apply. The fees are per person in addition to the trip cost. 

              Quad Occupancy is 4 people with 2 beds in a room. 

              Triple (also designated as Family) Occupancy (must be selected by all three people) $137 per person; 

              Double or Couple Occupancy (must be selected by two members) $385 per person; 

              Single Occupancy (your own room) $930. Couple Occupancy indicates a King room is desired. Double Occupancy is 2 beds with 2 people.
              
              <p>
                <table>
                  <thead>
                    <tr>
                      <th>Occupancy</th>
                      <th>4 Day Cost</th>
                      <th>7 Day Cost</th>
                      <th>Notes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Quad (Standard)</td>
                      <td>None</td>
                      <td>None</td>
                      <td>4 people with 2 bds in a room</td>
                    </tr>
                    <tr>
                      <td>Triple (Family)</td>
                      <td>$<?php echo $quad_occupancy_opt_out_4day['triple']?></td>
                      <td>$<?php echo $quad_occupancy_opt_out_7day['triple']?></td>
                      <td>Must be selected by all three people</td>
                    </tr>
                    <tr>
                      <td>Double or Couple</td>
                      <td>$<?php echo $quad_occupancy_opt_out_4day['double']?></td>
                      <td>$<?php echo $quad_occupancy_opt_out_7day['double']?></td>
                      <td>Must be selected by two members. Couple is one bed, Double is two beds.</td>
                    </tr>
                    <tr>
                      <td>Single</td>
                      <td>$<?php echo $quad_occupancy_opt_out_4day['single']?></td>
                      <td>$<?php echo $quad_occupancy_opt_out_7day['single']?></td>
                      <td>None</td>
                    </tr>
                  </tbody>
                </table>
              </p>


            </dd>

            <dt>Q. When is the deposit due?</dt>
            <dd>The non-­refundable deposit is due at the time of online application.</dd>

            <dt>Q. Will I receive a trip statement</dt>
            <dd>Statements can be viewed on your <a href="https://go.spreadtruth.com/">GO Admin</a> account under Trip History/Balances. This statement shows donations/payments received toward your account including each donor's name and amount donated.</dd>

            <dt>Q.  How do I receive donations toward my trip cost</dt>
            <dd>
              <p>Each team member will be set up with an account at Spread Truth Ministries. This account is specified by the team member's id number. Team members will receive their member id number via email within 3 business days after their application and deposit are received by Spread Truth Ministries. This account is where donations/payments will be deposited.</p>
              <p>
                Donations should be mailed directly to the Spread Truth office at:<br/>
                <strong>PO Box 3171<br/> Bloomington, IL 61702-3171</strong>
              </p>
              
              <p>
                Donations and payments by check should be payable to Spread Truth Ministries.
                We cannot accept checks that are made payable to an individual team member.
                All donations made payable to Spread Truth Ministries are tax deductible.
                NSF checks will incur a $5.00 service charge to the team member.
              </p>

              <!-- <p>Team members are encouraged to send out their support letters as soon as they sign up for the trip. It is recommended that you only give your donors two (2) weeks from the date you mail the letters for which to turn in their support donations. This generates urgency and allows you the opportunity to raise additional support should those donors not come through for you. Team members should reference their member id number on all support letters.</p> -->
            </dd>

            <dt>Q.  Do you have support letters I can send</dt>
            <dd>
              Support letters for all ministry tracks are available - <a href="http://go.spreadtruth.com/going">Click Here</a>. Team members should reference their member id number on all support letters sent.
            </dd>

            <dt>Q. What are my payment options</dt>
            <dd>
              <p>By check: mailed to and made payable to Spread Truth Ministries Inc. Include your member id number in the memo line of check.</p>
              <p>By credit card: Apply online with credit card or call our office at <a href="tel:13094523213">309-452-3213</a>. </p>
              <p>Automatic Withdrawal from Savings or Checking Account: call our office at <a href="tel:13094523213">309-452-3213</a> if you wish to use this option.</p>
            </dd>

            <dt>Q. What other costs can I expect to pay</dt>
            <dd>
              <p>Meals are not included in the price of the trip. Participants are allowed (by the IRS) to raise support for up to $<?php echo $raise_per_day; ?> per day (maximum of $<?php echo $food_max_7_day; ?> for 7 day trip participants) over the cost of the trip.</p>

              <p>Money raised for food allowances will only be accepted until <?php echo $last_day_for_food_allowances; ?>. Team members will be reimbursed by check, which is mailed on <?php echo $food_allowances_check_mailed; ?>.  Donations received after <?php echo $last_day_for_food_allowances; ?> that are not applied to a team members final trip cost balance will go to the general fund.</p>

              <p>Trip participants are responsible for any unforseen expenses that may be incurred while on the trip, including but not limited to: missed connections, weather delays, extra hotel nights, additional meals, room damages, and medical expenses. Spread Truth Ministries will supply trip participants that purchased trip insurance through us appropriate claim forms for covered reimbursable expenses.</p>
            </dd>

            <dt>Q. What if I raise more funds than my trip costs and meal money</dt>
            <dd>
              Excess funds raised over the initial cost of the trip and meal money will go into the trip general fund to pay for operational expense with each track. Excess funds will not be transferable to other trip members, unless it is an immediate family member (spouse, parent, child, and sibling). In addition, excess funds will not be transferable to future trips. 
            </dd>

            <dt>Q. Do I have to have medical insurance to attend the trip</dt>
            <dd>
              While it is not required we prefer that all team members have medical insurance coverage while on the trip. Anyone not covered under a regular policy will be asked to sign a medical insurance release form that indicates they will be responsible to pay any out of pocket expenses for medical insurance.
            </dd>

            <dt>Q. Does Spread Truth Ministries offer trip insurance</dt>
            <dd>
              <p>We offer trip insurance at a cost of an additional $<?php echo $trip_insurance_cost; ?><strong>*</strong> per person. This insurance has multiple benefits including but not limited to, trip cancellation reimbursement, trip interruption costs reimbursement (this includes additional lodging, transfer fees or new flights), baggage delay and loss coverage, and trip medical expense coverage. When you purchase our trip insurance you will receive a detailed summary of all covered benefits.</p>

              <p><strong>*</strong>those age 65 or over will incur an additional $<?php echo $old_person_add_charge; ?> per person charge.</p>
            </dd>

            <dt>Q. What if I decide to cancel my trip</dt>
            <dd>
              All cancelled trips will be fully refunded minus the non-refundable deposit and additional fees noted below.

              <p>
                <table>
                  <thead>
                    <tr>
                      <th></th>
                      <th>4 Day</th>
                      <th>7 Day</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Non-Refundable Deposit</td>
                      <td>$<?php echo $four_day_application_fee; ?></td>
                      <td>$<?php echo $seven_day_application_fee; ?></td>
                    </tr>
                  </tbody>
                </table>
              </p>

              <p>
                <table>
                  <thead>
                    <tr>
                      <th>Days Before Trip</th>
                      <th>4 Day</th>
                      <th>7 Day</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $html_output = "";

                      foreach ($trip_cancellation_fee as $key => $value) {

                        $html_output .= "<tr> \n";

                          foreach ($value as $subvalue) {
                            $html_output .= "<td>". $subvalue ."</td>\n";
                          }

                        $html_output .= "</tr> \n\n";

                      }

                      echo $html_output;

                     ?>
                  </tbody>
                </table>
              </p>

              <p>If you purchase trip insurance when you applied and your cancellation is a covered reason you will recoup most cancellation fees from the insurance company.  Refunds can only be made for payments made by the team member, not individual donations.</p>

            </dd>

          </dl>
        </li>


        <li>
          <h4>SightSeeing Activities (1)</h4>
          <dl>
            <dt>Q. Does Spread Truth Ministries arrange for sightseeing activities?</dt>
            <dd>
              <p>
                We offer several group options each evening from Monday through Thursday (Friday night is a mandatory group meeting) and during the day on Saturday. Activity descriptions are available after January 13 at <a href="http://www.spreadtruth.com/NYC">www.SpreadTruth.com/NYC</a>. You are welcome to plan your own evening activities. We plan activities as a group to see some of the most popular sites; this is a great resource for those who are unfamiliar with New York City. All group activities (unless otherwise noted) are led by experienced leaders.
              </p>
              <p>
                Sightseeing activity fees are the responsibility of the trip participant. Since this is for entertainment purposes, tax-deductible donations received to an account cannot be used toward the activity fees.
              </p>
            </dd>
          </dl>
        </li>

        <li>
          <h4>Trip Preparation (4)</h4>
          <dl>
            <dt>Q. What about training?</dt>
            <dd>We believe that training is the key to spending a week immersed in evangelism. Each member will receive specific information regarding training for their ministry track. This information will be sent in May.</dd>
            <dt>Q. Can I request a roommate?</dt>
            <dd>
              <p>The following guidelines apply to roommate requests:</p>
              <p>
                <ol>
                  <li>Please request only one roommate, unless it is a family situation.</li>
                  <li>We will do our best to honor roommate requests, but we cannot guarantee them.</li>
                  <li>For rooms with team members that are 18 years old or younger there must be at least one adult (21 years old or older) in that room.</li>
                  <li>Families of 4 will be placed in a room together unless otherwise specified.</li>
                  <li>Families of 3 will have someone added to their room to make quad occupancy unless they choose the “Family Occupancy” at an additional cost per person.</li>
                  <li>Married couples may stay together with another married couple if they wish. Please request the couple you wish to stay with.</li>
                  <li>Please do not call us with your request. Requests should be made on your application or via email.</li>
                </ol>
              </p>
            </dd>
            <dt>Q. What should I bring with me to NYC?</dt>
            <dd>
              <ol>
                <li>All airline tickets are e-tickets. You must have a government issued Photo ID for airport check-in (this can be a driver's license, passport, visa)</li>
                <li>Bible</li>
                <li>Backpack</li>
                <li>Good walking shoes</li>
                <li>Money for food ($250 is recommended for meal money; many eat for less than $200)</li>
                <li>Money for sightseeing and souvenirs</li>
                <li>Sunscreen or hat (you'll be outside a lot)</li>
                <li>Wet wipes or anti-bacterial hand wash</li>
                <li>Limit your luggage to one checked bag and one carry-on per person - checked bag weight 50 lbs or less</li>
                <li>Food - breakfast (i.e. pop tarts, cereal bars) and snack food (i.e. crackers, granola bars, and pretzels). These things can also be purchased at a drug store near the hotel.</li>
                <li>Credit card. You may need to place a credit card down on your room if you plan to use the telephone for outside calls.  The cost can be expensive, we recommend team members bring a cell phone for outside calls.</li>
                <li>At least one nice outfit if you are attending a Broadway play. The hotel has a workout room.</li>
                <li>Extra clothes - it gets hot during the day and you may wish to come back to the hotel and clean up before going out again.</li>
                <li>At least one person (and sometimes more) has had their luggage lost by the airline, for this reason please put at least one change of clean clothes in your carry-on as well as all medications or other necessities that you may need.</li>
                <li>The rooms have safes for your valuables, hair dryer, coffee maker, ironing board, and iron. There is not a self-serve laundry at the hotel. Laundry at the hotel is a paid service.</li>
              </ol>

            </dd>
            <dt>Q. What is the dress code in NYC?</dt>
            <dd>Make sure your clothing is modest and remember that we are ambassadors for Christ. Women: Modest slacks or jeans. Shorts/skirts not more than 4 inches above the knee. No low cut tops or midriff tops. No spaghetti strapped, tank or strapless tops or dresses. Sleeveless tops are acceptable. Men: Modest pants, shorts or jeans. Nothing torn or frayed. No t-­‐shirts with questionable material on them. </dd>
          </dl>
        </li>
        
      </ul>

    </section>

<?php include('partials/footer.php'); ?>
