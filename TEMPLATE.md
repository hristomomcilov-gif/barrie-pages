# Clone this page for the next shop

This repo is a locked visual template plus one filled example. Future shops get a copy of the folder and new **public facts only**. Do not restyle. Do not contact the business. Do not buy a domain. Chris is the only send gate.

## What is locked

Keep these the same on every shop page:

- Layout: hero, about, services, Google reviews, area served, call + quote form, footer
- Fonts: Bebas Neue, Barlow Condensed, Outfit
- Colours: navy + steel + amber
- Mobile-first header, sticky Call button, bottom call bar on small screens
- Quote form `preventDefault` — it must not send
- English only
- Footer line: `Example · not a live page · [Shop] are not clients`

Do not edit `css/styles.css` or `js/main.js` unless Chris asks to change the template for every shop.

## How to add the next shop

1. Copy a folder:
   - Blank placeholders: `sites/_template/`
   - Or a filled example: `sites/jeff-mackie/`
2. Rename the copy to `sites/[shop-slug]/` (lowercase, hyphens).
3. Open `sites/[shop-slug]/index.html`.
4. Replace every fact. Leave the section order and class names alone.
5. Point the primary **Call** button at the number the shop tells customers to use (`tel:+1…`).
6. Keep relative paths: `css/styles.css` and `js/main.js`.
7. Preview the folder on a phone-width screen before asking Chris to send.

```text
cp -R sites/_template sites/new-shop-name
```

## What you may put on the page

Use only facts the shop publishes (their site, ESA/licence listing, or a review you can point to):

- Legal name, town, years in business, owner name if they publish it
- Licence number, insured only if they say so
- Services they list — short restatements, not new offers
- Towns and regions they name
- Phones, mail, hours they print
- Real Google (or named aggregator) rating and exact review wording
- Photos only if they are already on **that shop’s** public site, and attribute them

## What you must not invent

- Phones, emails, hours, or a second location they do not publish
- Services they do not list (including EV chargers unless their site says so)
- Review quotes, star counts, or “family owned since…” lines you cannot source
- Stock photos of tradespeople, vans, or generated “shop” pictures
- A live email/send backend — Chris decides if/when a form goes live
- Walker’s, Derbecker, or any other shop on a page that is not theirs

If a fact is missing, leave the slot out or write “not listed.” Do not guess.

## Form and contact rules

- `js/main.js` already stops submit and shows an on-page note.
- Do not add a shop email field unless they publish an email.
- Do not wire Formspree, mailto, or any inbox.
- Primary Call uses the current customer number. Retired numbers stay off the Call button.

## Checklist before Chris sees it

- [ ] Folder is only that one shop
- [ ] Every phone, service, town, and quote is sourced
- [ ] Primary `tel:` is the live customer number
- [ ] Form does not send
- [ ] Footer says it is an example and they are not clients
- [ ] No Bulgarian, no extra pages, no domain, no outreach
