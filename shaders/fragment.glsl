
precision mediump float;

uniform vec2 uResolution;  // Canvas size (width,height)
uniform vec2 uMouse;       // mouse position in screen pixels
uniform float uTime;       // Time in seconds since load
uniform float uScroll;

#define PI 3.14159265359


float distField(in vec2 pos, in float r){
	return distance(gl_FragCoord.xy,pos * uResolution) / (r * min(uResolution.x,uResolution.y));
}

void main() {
	vec2 st = gl_FragCoord.xy/uResolution; //Normalize the fragcoord between 0 and 1
	
	float circ = distField(vec2(0.5),0.5);
	circ *= distField(vec2((sin(uTime)*0.5+0.5),(cos(uTime)*0.5+0.5)),0.3);
	circ *= distField(uMouse,0.3);
	circ = step(circ,0.4) * 10.;
	circ = clamp(circ,uScroll,1.0);
	// //circ = step(0.5,1-circ);
	// vec3 color = vec3(circ);
 
	gl_FragColor = vec4(vec3(circ),1.0); 
}