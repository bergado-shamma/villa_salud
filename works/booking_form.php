<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Form</title>
    <link rel="stylesheet" href="../styles/booking_form_styles.css" />
  </head>
  <body>
    <form action="process_booking.php" method="post">
      <h2>Booking Details</h2>
      <label for="patron_name">Name:</label>
      <input type="text" id="patron_name" name="patron_name" required />

      <label for="patron_email">Email:</label>
      <input type="email" id="patron_email" name="patron_email" required />

      <label for="patron_address">Address:</label>
      <input type="text" id="patron_address" name="patron_address" required />

      <label for="patron_phone">Phone Number:</label>
      <input type="text" id="patron_phone" name="patron_phone" required />

      <label for="venue_id">Venue:</label>
      <select id="venue_id" name="venue_id" required>
        <option value="">Select Venue</option>
      </select>

      <label for="package_id">Package:</label>
      <select id="package_id" name="package_id" required>
        <option value="">Select Package</option>
      </select>

      <label for="event_date">Event Date:</label>
      <input type="date" id="event_date" name="event_date" required />

      <label for="event_time">Event Time:</label>
      <input type="time" id="event_time" name="event_time" required />

      <label for="celebrant_name">Celebrant Name:</label>
      <input type="text" id="celebrant_name" name="celebrant_name" required />

      <label for="event_type">Kind of Affair:</label>
      <input type="text" id="event_type" name="event_type" required />

      <label for="theme">Theme:</label>
      <input type="text" id="theme" name="theme" />

      <h2>Reservation Details</h2>

      <label for="reservation_fee"><strong>Reservation Fee:</strong></label>
      <p id="reservation_fee">
        Upon booking a Reservation Fee of Php 25,000.00 for Venue Rental and
        Catering Services. Reservation fee is Non-refundable, Non-consumable,
        Non-transferable.
      </p>

      <label for="terms_of_payment"><strong>Terms of Payments:</strong></label>
      <p id="terms_of_payment">
        50% partial payment: one month before the event; and Full-payment: two
        weeks before the event.<br />
        Payments shall be made in cash, or acceptable credit cards. All payments
        must be supported by an Official receipt duly signed by Villa Salud
        authorized representative. An advice or notice thru fax or email shall
        be given to Villa Salud office on payments made thru BANK DEPOSIT.<br />
        Any amount made after the reservation fee will be forfeited in case of
        cancellation of event.
      </p>

      <label for="cancellation_charges"
        ><strong>Cancellation Charges:</strong></label
      >
      <p id="cancellation_charges">
        25% of total catering contract<br />
        50% of total catering contract<br />
        75% of total catering contract<br />
        100% of total catering cost and other charges
      </p>

      <label for="cancellation_period"
        ><strong>Cancellation Period:</strong></label
      >
      <p id="cancellation_period">
        211 days or 8 months prior to event<br />
        210-91 days or 7-4 months prior to event<br />
        90-61 days or 3-2 months prior to event<br />
        60 days or less prior to event
      </p>

      <label for="function_setup"><strong>Function Set-up:</strong></label>
      <p id="function_setup">
        1. Villa Salud reserves the right to control and regulate the set-up and
        lay-out/positioning of chairs and tables, buffet, the stage, volume of
        sound system and other equipment that may cause inconvenience,
        disturbance and may find to be unappropriated, offensive to other Villa
        Salud guests or detrimental to the interests of Villa Salud.<br />
        2. The Patron ensures that nothing shall be attached to the floors,
        walls, ceilings or columns of Villa Salud by nails, screws, pins, tapes
        or other means; otherwise any damage caused shall be chargeable to the
        Patron.<br />
        3. Any damage to other property and equipment in the function venue and
        other areas of Villa Salud caused by the Patron and/or any of his guests
        during the function shall be charged to the Patron. The cost will be
        based on present market value.<br />
        4. The Patron shall, when applicable, secure all the permits, gate pass,
        authorization or clearance necessary for the CATERER to set up its
        equipment, tables, chairs, and other paraphernalia at the function
        venue. CATERER shall not be liable for any delay in the set up due to
        the failure of the CUSTOMER to secure said permit or authorization.
      </p>

      <label for="safety_security"><strong>Safety and Security:</strong></label>
      <p id="safety_security">
        1. No flammable or explosive materials shall be allowed for display or
        use in any part of Villa Salud facilities.<br />
        2. No fireworks are allowed to be lit by the Patron for and during the
        function.<br />
        3. Villa Salud shall not be responsible for any damage to or loss of
        personal effects or merchandise brought in or left by the Patron and/or
        his guests prior, during or after the function.<br />
        4. Any loss, damage or injury that Villa Salud and/or Villa Salud Guests
        may suffer, attributable to acts or omissions of the Patron and/or his
        guests during the function, shall be the sole liability and
        responsibility of the Patron, to which Villa Salud/or Villa Salud Guests
        may recover remedies under existing laws.
      </p>

      <label for="food_beverages"><strong>Food and Beverages:</strong></label>
      <p id="food_beverages">
        1. Any vegetarian or special menus to be ordered should be advised at
        least two (2) weeks prior to function date.<br />
        2. The food served by the CATERER should be consumed immediately on the
        agreed serving time to avoid spoilage. The CUSTOMER shall liable for any
        spoilage or food poisoning due to delay in the serving time as
        instructed by the CUSTOMER. The CATERER also has the option not to serve
        the food if serving time is delayed beyond two hours and the quality of
        the food will be compromised.<br />
        3. Improper handling of food may lead to food poisoning and other health
        hazards. In line with this, all food and beverage items shall be
        exclusively purchased from VILLA SALUD. The Patron agrees that during
        the function, he shall not bring into the venue any food and or beverage
        from sources other than VILLA SALUD. The Patron likewise agrees not to
        use VILLA SALUD facilities to prepare or serve food and/or beverage to
        other guests during the event.<br />
        4. Villa Salud does recognize that for religious and other special
        reasons, it may become necessary to permit bringing of foods, Lechon,
        and/or beverages from sources other than Villa Salud. In such event, it
        is required that the patron obtain prior written approval from Villa
        Salud Management. Moreover, the Patron hereby acknowledges and confirms
        that the Patron hereby confirms that no liability or responsibility, nor
        any claim for damages of any nature, shall be borne by management of
        Villa Salud, its owners, employees and/or agents. The Patron assumes,
        sole liability and/or responsibility for any and all ill effect,
        illness, injury, loss and/or death, whether incurred by him or by any
        third party, arising, occurring, originating from, and/or connected with
        the bringing, purchase, preparation and/or service of such food and/or
        beverage.<br />
        5. Villa Salud shall not be liable for any illness resulting from
        consumption of food taken out from the Villa Salud.
      </p>

      <button type="submit">Submit Booking</button>
    </form>
  </body>
</html>
