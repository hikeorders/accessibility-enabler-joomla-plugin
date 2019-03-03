# Accessibility Enabler Joomla! plugin

The official Accessibility Enabler Plugin for Joomla. It helps to increase sales with disability friendly site.

## Overview

Accessibility Enabler is a boutique of accessibility tools that help people with disability to consume & navigate site content in an efficient way.

That means, this app makes your site accessible for everyone, which indeed increase sales & conversion.

### Accessibility isn't just for handicap
Opposite of the above statement is a well-known assumption that we all have. oops! Our common sense is wrong this time.

Fact is, Every human has disabilities caused by ageing, accidents or by birth. It may range from slight visual impairment, mobility impairment, reading impairment to blindness & deafness.

### Advantage # 1: Contributing to your sales and conversion
That's right! Having an accessible website increase sales. But How?

Well, accessibility Enabler helps to address the need of differently abled population to navigate & consume the content. By the by, this population is significantly large enough - you just can't choose to ignore.

This population is happy to do business with the people who understand their access needs. Thus you build competitive advantage for self.

### Advantage #2: Increase compliance to accessibility regulations
UNCRPD,WCAG 2.0,EU 2016/2102,ATAG 2.0,ADA,Section 50... You may have guessed it right these are various accessibility regulations in the various country

Accessibility Enabler helps to make your site more compliance with accessibility regulations of your country. Thus avoiding lawsuits and a hefty penalty.

### Advantage #3: Increasing Brand Value and Showcase Social Responsibility
Accessible site wins the heart of every person. This will build up your brand value among your customers as well as non-customers.

Brands always spread its value not just by quality products - it does so by showing social responsibility as well. Accessibility is one among highly valued social Responsibility.

![Plug-in screenshot](https://hikeorders.com/wp-content/uploads/2019/01/AccessibilityToolbar-ScreenShot-1-1.png)


## How It works
After installation, any visitor on the site can see an accessibility toolbar and change the setting as required for them.


## Quick Demo
Explore how the app works in an example site.

[View Example Site](https://accessibility-enabler.myshopify.com/)


## Important Links

[Plugin Home](https://hikeorders.com/accessibility/home?utm_source=joomla-plugin&utm_medium=joomla-plugin&utm_campaign=github-readme-file)

[Features](https://hikeorders.com/accessibility/main-accessibility-features/?utm_source=joomla-plugin&utm_medium=joomla-plugin&utm_campaign=github-readme-file)

[Pricing](https://hikeorders.com/accessibility/pricing/?utm_source=joomla-plugin&utm_medium=joomla-plugin&utm_campaign=github-readme-file)


## Plugin Installation

The plug-in is pretty simple. In admin panel, its UI consists of:
- Description in header
- Org ID input field
- Step by step guide to installation

Given the Org ID, the plug-in builds a URL of the Accessibility Enabler script and injects it into all pages
of the website.

## Javascript script

The main job of the plug-in is to insert Accessibility Enabler javascript script into the customer's website.

It is injected at the end of the `<head>` section. The script has "async" attribute as recommended by Accessibility Enabler.


## Files Structure

To learn more about requirements and features of Joomla plug-ins, refer to [their documentation](https://docs.joomla.org/J3.x:Creating_a_Plugin_for_Joomla)

Here we can only briefly describe the purpose of every file in the plug-in.

##### /LICENSE.txt

Standard GNU license file required in every Joomla plug-in.

##### /index.html

Just to avoid directory browsing 

##### /a11yenabler.xml

Main manifest file. It contains plug-in metadata as well as describes its UI on the admin page.

Its `<config>` section contains fields displayed on the admin page (Org ID input).

##### /a11yenabler.php

Main logic of the plug-in. It follows default structure for all Joomla plug-ins.

The file is executed on each page load (including admin pages) and inserts Accessibility Enabler javascript script on the page.

Custom logic is kept in the `onBeforeCompileHead()` hook. It is executed, as seen from its name, before page's `<head>` section is compiled.
The function checks if actual page is not admin page to avoid inserting script inside administrator screens.


##### /language/en-GB/

2 language files required for Joomla plug-in. They contain a few tokens used in other plug-in files
and by Joomla system during installation (_sys.ini_ file)

##### /a11yenabler/admin/info.php

Custom form field containing Accessibility Enabler logo, plug-in description and step by step guide for installation. It is used to insert custom HTML code
into the plug-in UI on the admin page. It's referenced from `a11yenabler.xml` manifest as a custom form field: `<field name="spacer_info" ...`






## General Notes

#### Versions maintenance
Usually, any breaking changes should be avoided, because we can't force all customers to re-install the plug-in. There
will always be some people using old versions of the plug-in, and we need to make sure they also work (maybe just not as efficiently as new versions).

#### Plug-ins for other platforms

> We have similar plug-ins for other platforms: WordPress, Drupal, Google Tag Manager. They are all quite different, but 
> ideally we should aim to follow the same UI and functionality within all Accessibility Enabler plug-ins in order to remain consistent.

