# Introduction

This extension was developed to serve as a reference for custom Joomla!
component development and as a simplistic alternative to Component Creator. This
extension boasts several inherent advantages:

- Tightly integrated controller/model/view class triad groups.<sup>1</sup>
- Fully-namespaced, Joomla! 3.9 compliant code base.<sup>2</sup>
- Roadmapped support for the Joomla! 4.x extension layer (and Joomla! 3.10
  support with [no compromises]).<sup>3</sup>
- A flexible, menu item based router to support [Joomla! SEF URLs].

<sup>1</sup> Each section of this extension avoids using a generic controller in
favor of using a controller class from its triad group.<br />
<sup>2</sup> Some features have been intentionally left out of this extension to
meet this requirement (i.e. custom form fields).<br />
<sup>3</sup> Additional features will be added to this extension once they're
supported in both Joomla! 4.x and Joomla! 3.10.

# Usage

To make use of this reference implementation you must fork the project and
refactor it to fit your needs. To add additional sections to the extension,
simply duplicate a controller/model/view triad and refactor.

# Conformance

This project conforms to the coding standards and static analysis parameters
defined in `.config`. [PHP_CodeSniffer] and [Phan] are used for testing.

While conformance is not *required* to deploy code to the testing environment,
**the production environment requires the `build` and `conformance` jobs to pass
successfully**.

# License

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with this program. If not, see http://www.gnu.org/licenses/.

[no compromises]:
https://developer.joomla.org/news/717-joomla-4-compatibility-layer-in-3-8.html
[Joomla! SEF URLs]:
https://docs.joomla.org/Search_Engine_Friendly_URLs
[PHP_CodeSniffer]:
https://github.com/squizlabs/PHP_CodeSniffer
[Phan]:
https://github.com/phan/phan
