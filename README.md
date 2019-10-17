# iTop-Management-Module
Add a management Module to any connectable CI

## Goal
A lot of equipment (Servers, network switches, Storage arrays) have an 'out-of-band' management module. This module generaly don't have a redundant network connection, as the loss of the management module doesn't really break down the equipment, only administrators are impacted.
The aim of this module is to create a dependency to the main equipment, but, in case of network connection loss, avoid the repercussion on all ressources. Only show in iTop the 'real' impact of the upstrem loss.
