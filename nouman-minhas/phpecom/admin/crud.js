const newObject = {property1: value1, property2: value2};
const myObject = {property1: value1, property2: value2};
console.log(myObject.property1); // output: value1
console.log(myObject['property2']); // output: value2
const myObject = {property1: value1, property2: value2};
myObject.property1 = newValue1;
const myObject = {property1: value1, property2: value2};
delete myObject.property1;
const myObject = {property1: value1, property2: value2};
const newObject = Object.keys(myObject).filter(key => key !== 'property1').reduce((acc, key) => {
  acc[key] = myObject[key];
  return acc;
}, {});
