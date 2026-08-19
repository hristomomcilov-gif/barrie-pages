# Clone this page for the next shop

This repo is a locked visual template plus filled shop sites. Future shops get a copy of the folder and new **public facts only**. Do not restyle. Write the page as the shop’s website, not as notes about the shop.

## What is locked

Keep these the same on every shop page:

- Layout: hero, about, services, reviews, area served, call + quote form, footer
- Fonts: Bebas Neue, Barlow Condensed, Outfit
- Colours: navy + steel + amber
- Mobile-first header, sticky Call button, bottom call bar on small screens
- Quote form posts to `/quote.php` (name, phone, need, hidden shop slug)
- English only
- Shop voice on every customer-facing sentence
- Footer: shop name, town, licence if public — nothing else

Do not edit `css/styles.css` or `js/main.js` unless the template change applies to every shop.

## How to add the next shop

1. Copy a folder:
   - Blank placeholders: `sites/_template/`
   - Or a filled example: `sites/jeff-mackie/`
2. Rename the copy to `sites/[shop-slug]/` (lowercase, hyphens).
3. Open `sites/[shop-slug]/index.html`.
4. Replace every fact. Leave the section order and class names alone.
5. Point the primary **Call** button at the number customers should use (`tel:+1…`).
6. Set the hidden form field `shop` to the same slug as the folder.
7. Add that slug to the `$shops` list in `quote.php`.
8. Keep relative paths: `css/styles.css` and `js/main.js`.
9. Preview the folder on a phone-width screen.

```text
cp -R sites/_template sites/new-shop-name
```

## Voice

Write as the shop: **we / our / the shop / [Shop Name]**.

Never put these on a customer-facing page:

- they / their website / towns they name
- as listed on their own pages / this page does not invent
- example — this form does not send
- not a live page / are not clients
- source lectures (“from their site”, “as they publish”)

If a fact came from the old site, just state the fact.

## What you may put on the page

Use only facts the shop already publishes (their old site, ESA/licence listing, or a review you can point to):

- Legal name, town, years in business, owner name if published
- Licence number, insured only if they say so
- Services they list — short restatements, not new offers
- Towns and regions they name
- Phones, mail, hours they print
- Real rating and exact review wording
- Photos only if they are already on **that shop’s** public site, and attribute them

## What you must not invent

- Phones, emails, hours, or a second location they do not publish
- Services they do not list (including EV chargers unless their site says so)
- Review quotes, star counts, or “family owned since…” lines you cannot source
- Stock photos of tradespeople, vans, or generated “shop” pictures
- A shop email — quote.php already mails `contact@teamulate.ca`
- Another shop’s facts on this shop’s page

If a fact is missing, leave the slot out. Do not guess.

## Form and contact rules

- The form must POST to `/quote.php`. Do not `preventDefault` a fake thank-you.
- Fields: `name`, `phone`, `need`, hidden `shop`. Town and job type are optional extras.
- After a good send, `quote.php` redirects to `/sites/[shop-slug]/?sent=1#contact`.
- `js/main.js` shows **Thanks. We'll call you back.** when `sent=1`.
- Do not add a shop email field unless they publish an email.
- Primary Call uses the current customer number. Retired numbers stay off the Call button.

## Checklist

- [ ] Folder is only that one shop
- [ ] Copy is shop voice, public facts only
- [ ] Primary `tel:` is the live customer number
- [ ] Form posts to `/quote.php` with the correct shop slug
- [ ] Slug is registered in `quote.php`
- [ ] Footer is shop name, town, and licence if public
- [ ] No demo ribbon, no scout notes, no Bulgarian, no extra pages
