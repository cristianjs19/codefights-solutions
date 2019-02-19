# Description

Below we will define an n-interesting polygon. Your task is to find the area of a polygon for a given n.

A 1-interesting polygon is just a square with a side of length 1. An n-interesting polygon is obtained by taking the n - 1-interesting polygon and appending 1-interesting polygons to its rim, side by side. You can see the 1-, 2-, 3- and 4-interesting polygons in the picture below.

<blockquote class="imgur-embed-pub" lang="en" data-id="cEEM9I0"><a href="//imgur.com/cEEM9I0"></a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>


# Example

For n = 2, the output should be
shapeArea(n) = 5;
For n = 3, the output should be
shapeArea(n) = 13.
