/**
 * The primary script for the main directory index.
 * Copyright 2020 Christopher Reilly
 */


/**
 * Toggle an expando thing.
 * An expando thing has these style classes: expanded, contracted.
 */
function toggleExpando(thing)
{
  if (thing.classList.contains("expanded")) {
    thing.classList.remove("expanded");
    thing.classList.add("contracted");
  } else {
    thing.classList.remove("contracted");
    thing.classList.add("expanded");
  }
}
