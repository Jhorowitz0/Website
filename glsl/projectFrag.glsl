uniform vec2 uResolution;  // Canvas size (width,height)
uniform vec2 uMouse;       // mouse position in screen pixels
uniform float uTime;       // Time in seconds since load
uniform float uScroll; //page scroll height

//input variables
uniform vec3 uColor1;
uniform vec3 uColor2;
uniform vec3 uColor3;
uniform vec3 uColor4;
uniform float uValue1;
uniform float uValue2;
uniform float uValue3;
uniform float uValue4;

#define PI 3.14159265359


void main() {
	vec2 st = gl_FragCoord.xy; // I work mostly at pixel scale for web elements

	float noise = perlin3D(vec3(st*0.001,uTime*0.01));

	float pattern = cubicPulse(subDivide(noise,15.0),0.5,clamp(0.0,0.03,0.1));

	vec3 color = mix(uColor2,uColor1,pattern);

	gl_FragColor = vec4(color,1.0);
}
