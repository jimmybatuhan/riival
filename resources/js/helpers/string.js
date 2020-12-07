"use strict";

export const snakeToCamel = str => str && str.replace(/([-_]\w)/g, g => g[1].toUpperCase());

export const toKebabCase = str => str && str
    .match(/[A-Z]{2,}(?=[A-Z][a-z]+[0-9]*|\b)|[A-Z]?[a-z]+[0-9]*|[A-Z]|[0-9]+/g)
    .map(x => x.toLowerCase())
    .join('-');